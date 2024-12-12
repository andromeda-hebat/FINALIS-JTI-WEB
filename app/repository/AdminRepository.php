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
                        jabatan,
                        foto_profil
                    FROM USERS.Admin
                SQL)
                ->fetchAll(\PDO::FETCH_CLASS, Admin::class);
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }
}