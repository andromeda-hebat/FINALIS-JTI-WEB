<?php

namespace App\Repository;

use App\Core\Database;
use App\Models\Mahasiswa;
use App\Helpers\ErrorLog;

class MahasiswaRepository
{
    public static function getAllDataMahasiswa(): array
    {
        try {
            return Database::getConnection()
                ->query(<<<SQL
                    SELECT 
                        ROW_NUMBER() OVER (ORDER BY nim ASC) AS nomor,
                        nim AS user_id,
                        nama_lengkap,
                        email,
                        jurusan,
                        prodi,
                        tahun_masuk
                    FROM USERS.Mahasiswa
                SQL)
                ->fetchAll(\PDO::FETCH_CLASS, Mahasiswa::class);
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function addNewMahasiswa(Mahasiswa $new_mhs): void
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                INSERT INTO USERS.Mahasiswa
                VALUES (
                    :nim, 
                    :nama_lengkap, 
                    :password, 
                    :email, 
                    :jurusan, 
                    :prodi,
                    :tahun_masuk,
                    :foto_profil
                )
            SQL);
            $stmt->bindValue(':nim', $new_mhs->getUserId(), \PDO::PARAM_STR);
            $stmt->bindValue(':nama_lengkap', $new_mhs->getNamaLengkap(), \PDO::PARAM_STR);
            $stmt->bindValue(':password', $new_mhs->getPassword(), \PDO::PARAM_STR);
            $stmt->bindValue(':email', $new_mhs->getEmail(), \PDO::PARAM_STR);
            $stmt->bindValue(':jurusan', $new_mhs->getJurusan(), \PDO::PARAM_STR);
            $stmt->bindValue(':prodi', $new_mhs->getProdi(), \PDO::PARAM_STR);
            $stmt->bindValue(':tahun_masuk', $new_mhs->getTahunMasuk(), \PDO::PARAM_STR);
            $stmt->bindValue(':foto_profil', $new_mhs->getFotoProfil(), \PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function getSingleDataMahasiswa(string $nim): bool|Mahasiswa
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                SELECT
                    nim AS user_id,
                    nama_lengkap,
                    password,
                    email,
                    jurusan,
                    prodi,
                    tahun_masuk,
                    foto_profil
                FROM USERS.Mahasiswa
                WHERE nim = :nim
            SQL);
            $stmt->bindValue(':nim', $nim, \PDO::PARAM_STR);
            $stmt->setFetchMode(\PDO::FETCH_CLASS, Mahasiswa::class);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function updateDataMahasiswaWithoutPassword(Mahasiswa $mhs): void
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                UPDATE USERS.Mahasiswa
                SET 
                    nama_lengkap = :nama_lengkap,
                    email = :email,
                    jurusan = :jurusan,
                    prodi = :prodi,
                    tahun_masuk = :tahun_masuk,
                    foto_profil = :foto_profil
                WHERE nim = :nim
            SQL);
            $stmt->bindValue(':nama_lengkap', $mhs->getNamaLengkap(), \PDO::PARAM_STR);
            $stmt->bindValue(':email', $mhs->getEmail(), \PDO::PARAM_STR);
            $stmt->bindValue(':jurusan', $mhs->getJurusan(), \PDO::PARAM_STR);
            $stmt->bindValue(':prodi', $mhs->getProdi(), \PDO::PARAM_STR);
            $stmt->bindValue(':tahun_masuk', $mhs->getTahunMasuk(), \PDO::PARAM_STR);
            $stmt->bindValue(':foto_profil', $mhs->getFotoProfil(), \PDO::PARAM_STR);
            $stmt->bindValue(':nim', $mhs->getUserId(), \PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function updateAllFieldDataMahasiswa(Mahasiswa $mhs): void
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                UPDATE USERS.Mahasiswa
                SET 
                    nama_lengkap = :nama_lengkap,
                    email = :email,
                    password = :password,
                    jurusan = :jurusan,
                    prodi = :prodi,
                    tahun_masuk = :tahun_masuk,
                    foto_profil = :foto_profil
                WHERE nim = :nim
            SQL);
            $stmt->bindValue(':nama_lengkap', $mhs->getNamaLengkap(), \PDO::PARAM_STR);
            $stmt->bindValue(':email', $mhs->getEmail(), \PDO::PARAM_STR);
            $stmt->bindValue(':password', $mhs->getPassword(), \PDO::PARAM_STR);
            $stmt->bindValue(':jurusan', $mhs->getJurusan(), \PDO::PARAM_STR);
            $stmt->bindValue(':prodi', $mhs->getProdi(), \PDO::PARAM_STR);
            $stmt->bindValue(':tahun_masuk', $mhs->getTahunMasuk(), \PDO::PARAM_STR);
            $stmt->bindValue(':foto_profil', $mhs->getFotoProfil(), \PDO::PARAM_STR);
            $stmt->bindValue(':nim', $mhs->getUserId(), \PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function deleteMahasiswaByID(string $nim): void
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                DELETE FROM USERS.Mahasiswa
                WHERE nim = :nim
            SQL);
            $stmt->bindValue(':nim', $nim, \PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }
}