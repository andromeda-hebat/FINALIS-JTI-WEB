<?php

namespace App\Repository;

use App\Core\Database;
use App\Models\User;
use App\Helpers\ErrorLog;

class UserRepository
{
    public static function getUserByUserIDAndPassword(string $user_id, string $password): bool|User
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                SELECT 
                    nim AS user_id, 
                    nama_lengkap, 
                    password, 
                    'mahasiswa' AS role, 
                    foto_profil
                FROM USERS.Mahasiswa
                WHERE nim = ?
                UNION 
                SELECT  
                    id_admin AS user_id, 
                    nama_lengkap,
                    password, 
                    jabatan AS role, 
                    foto_profil
                FROM USERS.Admin
                WHERE id_admin = ?;
            SQL);
            $stmt->bindValue(1, $user_id, \PDO::PARAM_STR);
            $stmt->bindValue(2, $user_id, \PDO::PARAM_STR);
            $stmt->execute();
            $stmt->setFetchMode(\PDO::FETCH_CLASS, User::class);
            $user = $stmt->fetch();

            return password_verify($password, $user->getPassword()) ? $user : false;
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }
}