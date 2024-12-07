<?php

namespace App\Repository;

use App\Core\Database;
use App\Models\{BerkasTA, VerifikasiBerkas};
use App\Helpers\ErrorLog;

class BerkasTARepository
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

    public static function updateVerifyStatusBerkasTA(int $id_verifikasi, string $status_verifikasi, string $keterangan): void
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