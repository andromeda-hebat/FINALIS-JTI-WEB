<?php

namespace App\Repository;

use App\Core\Database;
use App\Models\Admin;
use App\Helpers\ErrorLog;

class AdminRepository
{
    public static function getAllDataAdmin(): array
    {
        try {
            return Database::getConnection()
                ->query(<<<SQL
                    SELECT 
                        ROW_NUMBER() OVER (ORDER BY id_admin ASC) AS nomor,
                        id_admin AS user_id,
                        nama_lengkap,
                        password,
                        email,
                        jabatan
                    FROM USERS.Admin
                SQL)
                ->fetchAll(\PDO::FETCH_CLASS, Admin::class);
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function addNewAdmin(Admin $new_admin): void
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                INSERT INTO USERS.Admin 
                VALUES (:id_admin, :nama_lengkap, :password, :email, :jabatan, :foto_profil)
            SQL);
            $stmt->bindValue(':id_admin', $new_admin->getUserId(), \PDO::PARAM_STR);
            $stmt->bindValue(':nama_lengkap', $new_admin->getNamaLengkap(), \PDO::PARAM_STR);
            $stmt->bindValue(':password', $new_admin->getPassword(), \PDO::PARAM_STR);
            $stmt->bindValue(':email', $new_admin->getEmail(), \PDO::PARAM_STR);
            $stmt->bindValue(':jabatan', $new_admin->getJabatan(), \PDO::PARAM_STR);
            $stmt->bindValue(':foto_profil', $new_admin->getFotoProfil(), \PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function getSingleDataAdmin(string $id_admin): bool|Admin
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                SELECT
                    id_admin AS user_id,
                    nama_lengkap,
                    password,
                    email,
                    jabatan AS role,
                    foto_profil
                FROM USERS.Admin
                WHERE id_admin = :id_admin
            SQL);
            $stmt->bindValue(':id_admin', $id_admin, \PDO::PARAM_STR);
            $stmt->setFetchMode(\PDO::FETCH_CLASS, Admin::class);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function updateDataAdminWithoutPassword(Admin $admin): void
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                UPDATE USERS.Admin
                SET 
                    nama_lengkap = :nama_lengkap,
                    email = :email,
                    jabatan = :jabatan,
                    foto_profil = :foto_profil
                WHERE id_admin = :id_admin
            SQL);
            $stmt->bindValue(':nama_lengkap', $admin->getNamaLengkap(), \PDO::PARAM_STR);
            $stmt->bindValue(':email', $admin->getEmail(), \PDO::PARAM_STR);
            $stmt->bindValue(':jabatan', $admin->getJabatan(), \PDO::PARAM_STR);
            $stmt->bindValue(':foto_profil', $admin->getFotoProfil(), \PDO::PARAM_STR);
            $stmt->bindValue(':id_admin', $admin->getUserId(), \PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function updateAllFieldDataAdmin(Admin $admin): void
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                UPDATE USERS.Admin
                SET 
                    nama_lengkap = :nama_lengkap,
                    password = :password,
                    email = :email,
                    jabatan = :jabatan,
                    foto_profil = :foto_profil
                WHERE id_admin = :id_admin
            SQL);
            $stmt->bindValue(':nama_lengkap', $admin->getNamaLengkap(), \PDO::PARAM_STR);
            $stmt->bindValue(':password', $admin->getPassword(), \PDO::PARAM_STR);
            $stmt->bindValue(':email', $admin->getEmail(), \PDO::PARAM_STR);
            $stmt->bindValue(':jabatan', $admin->getJabatan(), \PDO::PARAM_STR);
            $stmt->bindValue(':foto_profil', $admin->getFotoProfil(), \PDO::PARAM_STR);
            $stmt->bindValue(':id_admin', $admin->getUserId(), \PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }
}
