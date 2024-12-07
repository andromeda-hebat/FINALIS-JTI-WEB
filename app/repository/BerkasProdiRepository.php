<?php

namespace App\Repository;

use App\Core\Database;
use App\Models\{BerkasProdi, VerifikasiBerkas};
use App\Helpers\ErrorLog;

class BerkasProdiRepository
{
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