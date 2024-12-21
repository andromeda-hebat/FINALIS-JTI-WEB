<?php

namespace App\Repository;

use App\Core\Database;
use App\Models\{StatusBerkas, BerkasTA, BerkasPengajuan, DetailBerkasTAPengajuan};
use App\Helpers\ErrorLog;

class BerkasTARepository
{    
    public static function getStatusBerkasTA(string $user_id): bool|StatusBerkas
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                SELECT status_verifikasi, keterangan_verifikasi
                FROM VER.VerifikasiBerkas AS v
                INNER JOIN Berkas.TA AS p ON p.id_ta = v.id_berkas
                WHERE nim = ?
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
            $stmt->bindValue(':nim', $berkas_TA->getNim(), \PDO::PARAM_STR);
            $stmt->bindValue(':laporan_ta', $berkas_TA->getLaporanTa(), \PDO::PARAM_STR);
            $stmt->bindValue(':aplikasi', $berkas_TA->getAplikasi(), \PDO::PARAM_STR);
            $stmt->bindValue(':bukti_publikasi', $berkas_TA->getBuktiPublikasi(), \PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function getAllBerkasTAReq(): array
    {
        try {
            return Database::getConnection()
                ->query(<<<SQL
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
                SQL)
                ->fetchAll(\PDO::FETCH_CLASS, BerkasPengajuan::class);
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function getAllSubmittedBerkasTA(): array
    {
        try {
            return Database::getConnection()
                ->query(<<<SQL
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
                    WHERE vb.status_verifikasi = 'Diajukan'
                    ORDER BY ta.tanggal_request DESC;
                SQL)
                ->fetchAll(\PDO::FETCH_CLASS, BerkasPengajuan::class);
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    
    public static function getSingleBerkasTAReq(int $id_verifikasi): bool|DetailBerkasTAPengajuan
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                SELECT 
                    vb.id_verifikasi, 
                    ta.id_ta AS id_berkas, 
                    m.nim, 
                    m.nama_lengkap,
                    m.foto_profil,
                    ta.tanggal_request,
                    vb.status_verifikasi, 
                    vb.keterangan_verifikasi,
                    ta.laporan_TA AS laporan_ta,
                    ta.aplikasi,
                    ta.bukti_publikasi
                FROM VER.VerifikasiBerkas vb
                INNER JOIN BERKAS.TA ta ON vb.id_berkas = ta.id_ta
                INNER JOIN USERS.Mahasiswa m ON ta.nim = m.nim
                WHERE vb.id_verifikasi = :id_verifikasi
            SQL);
            $stmt->bindValue(':id_verifikasi', $id_verifikasi, \PDO::PARAM_INT);
            $stmt->setFetchMode(\PDO::FETCH_CLASS, DetailBerkasTAPengajuan::class);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function updateVerifyStatusBerkasTA(string $id_berkas, string $status_verifikasi, string $keterangan, string $id_admin): void
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
            EXEC sp_UpdateVerifikasiBerkasTA
                @id_berkas = :id_berkas,
                @status_verifikasi = :status,
                @keterangan_verifikasi = :keterangan,
                @id_admin = :id_admin;
            SQL);
            $stmt->bindValue(':id_berkas', $id_berkas, \PDO::PARAM_STR);
            $stmt->bindValue(':status', $status_verifikasi, \PDO::PARAM_STR);
            $stmt->bindValue(':keterangan', $keterangan, \PDO::PARAM_STR);
            $stmt->bindValue(':id_admin', $id_admin, \PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }
}