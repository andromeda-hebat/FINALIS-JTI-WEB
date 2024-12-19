<?php

namespace App\Repository;

use App\Core\Database;
use App\Models\{StatusBerkas, RiwayatPengajuan, BerkasPengajuan};
use App\Helpers\ErrorLog;

class BerkasRepository
{
    public static function getStatusBebasTanggungan(string $user_id): bool|StatusBerkas
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                SELECT
                    CASE 
                        WHEN SUM(CASE WHEN jenis_tanggungan = 'Tanggungan TA' AND status_tanggungan = 'Selesai' THEN 1 ELSE 0 END) > 0
                            AND SUM(CASE WHEN jenis_tanggungan = 'Tanggungan Prodi' AND status_tanggungan = 'Selesai' THEN 1 ELSE 0 END) > 0
                        THEN 'lunas'
                        ELSE 'belum_lunas'
                    END AS status_verifikasi,
                    CASE 
                        WHEN SUM(CASE WHEN jenis_tanggungan = 'Tanggungan TA' AND status_tanggungan = 'Selesai' THEN 1 ELSE 0 END) > 0
                            AND SUM(CASE WHEN jenis_tanggungan = 'Tanggungan Prodi' AND status_tanggungan = 'Selesai' THEN 1 ELSE 0 END) > 0
                        THEN 'Bisa cetak surat bebas tanggungan'
                        ELSE 'Belum bisa cetak surat bebas tanggungan'
                    END AS keterangan_verifikasi
                FROM BERKAS.Tanggungan
                WHERE nim = ?;
            SQL);
            $stmt->bindValue(1, $user_id);
            $stmt->setFetchMode(\PDO::FETCH_CLASS, StatusBerkas::class);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function getUserHistoryRequestBerkas(string $user_id): array
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                SELECT 
                    ROW_NUMBER() OVER (ORDER BY tanggal_request ASC) AS nomor,
                    tanggal_request AS tanggal_request,
                    jenis_berkas AS jenis_formulir,
                    status_verifikasi AS status,
                    keterangan_verifikasi AS keterangan
                FROM (
                    SELECT P.tanggal_request,
                        V.status_verifikasi,
                        V.keterangan_verifikasi,
                        'Formulir Administrasi Prodi' AS jenis_berkas 
                    FROM VER.VerifikasiBerkas V
                    INNER JOIN BERKAS.Prodi P ON P.id_berkas_prodi = V.id_berkas
                    WHERE P.nim = ?
                    UNION
                    SELECT T.tanggal_request,
                        V.status_verifikasi,
                        V.keterangan_verifikasi,
                        'Formulir Tugas Akhir' AS jenis_berkas 
                    FROM VER.VerifikasiBerkas V
                    INNER JOIN BERKAS.TA T ON T.id_ta = V.id_berkas
                    WHERE T.nim = ?
                ) AS Combined
                ORDER BY tanggal_request ASC;
            SQL);
            $stmt->bindValue(1, $user_id, \PDO::PARAM_STR);
            $stmt->bindValue(2, $user_id, \PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_CLASS, RiwayatPengajuan::class);
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function getAllBerkas(): array
    {
        try {
            return Database::getConnection()
                ->query(<<<SQL
                    SELECT * 
                    FROM (
                        SELECT 
                            vb.id_verifikasi, 
                            ta.id_ta AS id_berkas, 
                            m.nim, 
                            m.nama_lengkap, 
                            ta.tanggal_request, 
                            vb.status_verifikasi, 
                            vb.keterangan_verifikasi
                        FROM VER.VerifikasiBerkas vb
                        INNER JOIN BERKAS.TA ta ON vb.id_berkas = ta.id_ta
                        INNER JOIN USERS.Mahasiswa m ON ta.nim = m.nim
                        UNION
                        SELECT
                            v.id_verifikasi,
                            p.id_berkas_prodi AS id_berkas,
                            m.nim,
                            m.nama_lengkap,
                            p.tanggal_request,
                            v.status_verifikasi,
                            v.keterangan_verifikasi
                        FROM USERS.Mahasiswa m
                        INNER JOIN BERKAS.Prodi p ON m.nim = p.nim
                        INNER JOIN VER.VerifikasiBerkas v ON v.id_berkas = p.id_berkas_prodi
                    ) AS all_berkas
                    ORDER BY tanggal_request DESC
                SQL)
                ->fetchAll(\PDO::FETCH_CLASS, BerkasPengajuan::class);
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }
}
