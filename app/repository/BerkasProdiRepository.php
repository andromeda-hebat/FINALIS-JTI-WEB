<?php

namespace App\Repository;

use App\Core\Database;
use App\Models\{StatusBerkas, BerkasProdi, BerkasPengajuan, DetailBerkasProdiPengajuan};
use App\Helpers\ErrorLog;

class BerkasProdiRepository
{
    public static function getStatusBerkasProdi(string $user_id): bool|StatusBerkas
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                SELECT status_verifikasi, keterangan_verifikasi
                FROM VER.VerifikasiBerkas AS v
                INNER JOIN Berkas.Prodi AS p ON p.id_berkas_prodi = v.id_berkas
                WHERE nim = :nim
            SQL);
            $stmt->bindValue(':nim', $user_id);
            $stmt->setFetchMode(\PDO::FETCH_CLASS, StatusBerkas::class);
            $stmt->execute();
            return $stmt->fetch();
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
            $stmt->bindValue(':nim', $berkas_prodi->getNim(), \PDO::PARAM_STR);
            $stmt->bindValue(':toeic', $berkas_prodi->getToeic(), \PDO::PARAM_STR);
            $stmt->bindValue(':skripsi', $berkas_prodi->getDistribusiTugasAkhir(), \PDO::PARAM_STR);
            $stmt->bindValue(':magang', $berkas_prodi->getDistribusiMagang(), \PDO::PARAM_STR);
            $stmt->bindValue(':kompen', $berkas_prodi->getSuratBebasKompen(), \PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function getAllBerkasProdiReq(): array
    {
        try {
            return Database::getConnection()
                ->query(<<<SQL
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
                SQL)
                ->fetchAll(\PDO::FETCH_CLASS, BerkasPengajuan::class);
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function getAllSubmittedBerkasProdi(): array
    {
        try {
            return Database::getConnection()
                ->query(<<<SQL
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
                    WHERE v.status_verifikasi = 'Diajukan'
                    ORDER BY p.tanggal_request DESC
                SQL)
                ->fetchAll(\PDO::FETCH_CLASS, BerkasPengajuan::class);
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function getSingleBerkasProdiReq(int $id_verifikasi): bool|DetailBerkasProdiPengajuan
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                SELECT
                    vb.id_verifikasi,
                    pr.id_berkas_prodi AS id_berkas,
                    m.nim,
                    m.nama_lengkap,
                    m.foto_profil,
                    pr.tanggal_request,
                    vb.status_verifikasi,
                    vb.keterangan_verifikasi,
                    pr.distribusi_magang,
                    pr.distribusi_skripsi,
                    pr.surat_bebas_kompen,
                    pr.toeic
                FROM VER.VerifikasiBerkas vb
                INNER JOIN BERKAS.Prodi pr ON vb.id_berkas = pr.id_berkas_prodi
                INNER JOIN USERS.Mahasiswa m ON pr.nim = m.nim
                WHERE vb.id_verifikasi = :id_verifikasi;
            SQL);
            $stmt->bindValue(':id_verifikasi', $id_verifikasi, \PDO::PARAM_INT);
            $stmt->setFetchMode(\PDO::FETCH_CLASS, DetailBerkasProdiPengajuan::class);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function updateVerifyStatusBerkasProdi(string $id_berkas, string $status_verifikasi, string $keterangan, string $id_admin): void
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
            EXEC sp_UpdateVerifikasiBerkasProdi
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
            throw new \PDOException($e->getMessage());
        }
    }
}