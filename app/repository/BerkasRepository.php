<?php

namespace App\Repository;

use App\Core\Database;
use App\Models\{BerkasProdi, BerkasTA, RiwayatPengajuan, VerifikasiBerkas};
use App\Helpers\ErrorLog;

class BerkasRepository
{
    public static function checkUserBerkasTAStatus(string $user_id): bool|string
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                SELECT status_verifikasi
                FROM VER.VerifikasiBerkas AS v
                INNER JOIN Berkas.TA AS p ON p.id_ta = v.id_berkas
                WHERE nim = ?
            SQL);
            $stmt->bindValue(1, $user_id);
            $stmt->execute();
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);

            if ($result == false) {
                return "kosong";
            } else {
                return $result['status_verifikasi'];
            }
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function checkUserBerkasProdiStatus(string $user_id): bool|string
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                SELECT status_verifikasi
                FROM VER.VerifikasiBerkas AS v
                INNER JOIN Berkas.Prodi AS p ON p.id_berkas_prodi = v.id_berkas
                WHERE nim = :nim
            SQL);
            $stmt->bindValue(':nim', $user_id);
            $stmt->execute();
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);

            if ($result == false) {
                return "kosong";
            } else {
                return $result['status_verifikasi'];
            }
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function addNewBerkasTA(BerkasTA $berkas_TA): void
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                EXEC sp_InsertBerkasTA 
                    @nim = :nim,
                    @laporan_TA = :laporan_ta,
                    @aplikasi = :aplikasi,
                    @bukti_publikasi = :bukti_publikasi,
                    @id_admin = 'A12345';
            SQL);
            $stmt->bindValue(':nim', $berkas_TA->nim, \PDO::PARAM_STR);
            $stmt->bindValue(':laporan_ta', $berkas_TA->laporan_ta, \PDO::PARAM_STR);
            $stmt->bindValue(':aplikasi', $berkas_TA->aplikasi, \PDO::PARAM_STR);
            $stmt->bindValue(':bukti_publikasi', $berkas_TA->bukti_publikasi, \PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function addNewBerkasProdi(BerkasProdi $berkas_prodi): void
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                EXEC sp_InsertBerkasProdi 
                    @nim = :nim,
                    @toeic = :toeic,
                    @distribusi_skripsi = :skripsi,
                    @distribusi_magang = :magang,
                    @surat_bebas_kompen = :kompen,
                    @id_admin = 'A12346'
            SQL);
            $stmt->bindValue(':nim', $berkas_prodi->nim, \PDO::PARAM_STR);
            $stmt->bindValue(':toeic', $berkas_prodi->toeic, \PDO::PARAM_STR);
            $stmt->bindValue(':skripsi', $berkas_prodi->distribusi_skripsi, \PDO::PARAM_STR);
            $stmt->bindValue(':magang', $berkas_prodi->distribusi_magang, \PDO::PARAM_STR);
            $stmt->bindValue(':kompen', $berkas_prodi->surat_bebas_kompen, \PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function getUserHistoryRequest(string $user_id): array
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
                    UNION ALL
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

    public static function getAllBerkasTAReq(): array
    {
        try {
            $stmt = Database::getConnection()->query(<<<SQL
                SELECT
                    ROW_NUMBER() OVER (ORDER BY tanggal_request ASC) AS nomor,
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
                ORDER BY ta.tanggal_request DESC;
            SQL);
            return $stmt->fetchAll(\PDO::FETCH_CLASS, VerifikasiBerkas::class);
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function getAllBerkasProdiReq(): array
    {
        try {
            $stmt = Database::getConnection()->query(<<<SQL
                SELECT
                    ROW_NUMBER() OVER (ORDER BY tanggal_request ASC) AS nomor,
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
                ORDER BY p.tanggal_request DESC
            SQL);
            return $stmt->fetchAll(\PDO::FETCH_CLASS, VerifikasiBerkas::class);
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function getSingleBerkasTAReq(int $id_verifikasi): bool|VerifikasiBerkas
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
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
                WHERE vb.id_verifikasi = :id_verifikasi
            SQL);
            $stmt->bindValue(':id_verifikasi', $id_verifikasi, \PDO::PARAM_INT);
            $stmt->setFetchMode(\PDO::FETCH_CLASS, VerifikasiBerkas::class);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function getSingleBerkasProdiReq(int $id_verifikasi): bool|VerifikasiBerkas
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
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
                WHERE v.id_verifikasi = :id_verifikasi
            SQL);
            $stmt->bindValue(':id_verifikasi', $id_verifikasi, \PDO::PARAM_INT);
            $stmt->setFetchMode(\PDO::FETCH_CLASS, VerifikasiBerkas::class);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function updateVerifyStatusBerkasProdi(int $id_verifikasi, string $status_verifikasi, string $keterangan): void
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
            UPDATE VER.VerifikasiBerkas
            SET 
                status_verifikasi = :status,
                keterangan_verifikasi = :keterangan
            WHERE id_verifikasi = :id_verifikasi
            SQL);
            $stmt->bindValue(':status', $status_verifikasi, \PDO::PARAM_STR);
            $stmt->bindValue(':keterangan', $keterangan, \PDO::PARAM_STR);
            $stmt->bindValue(':id_verifikasi', $id_verifikasi, \PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage());
        }
    }
}