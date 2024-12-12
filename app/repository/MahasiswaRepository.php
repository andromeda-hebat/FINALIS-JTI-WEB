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
                        password,
                        email,
                        jurusan,
                        prodi,
                        tahun_masuk,
                        foto_profil
                    FROM USERS.Mahasiswa
                SQL)
                ->fetchAll(\PDO::FETCH_CLASS, Mahasiswa::class);
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }
}