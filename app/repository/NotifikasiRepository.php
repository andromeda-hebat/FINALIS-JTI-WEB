<?php

namespace App\Repository;

use App\Core\Database;
use App\Models\Notification;
use App\Helpers\ErrorLog;

class NotifikasiRepository
{
    public static function getAdminProdiNotificationByUserID(string $user_id): array
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                SELECT 
                    n.id_notifikasi,
                    a.nama_lengkap AS 'admin',
                    m.nama_lengkap AS 'mahasiswa',
                    n.pesan,
                    PR.tanggal_request AS 'tanggal',
                    n.status_notifikasi AS 'status'
                FROM VER.Notifikasi n
                INNER JOIN USERS.Admin a ON a.id_admin  = n.id_admin
                INNER JOIN USERS.Mahasiswa m ON m.nim = n.nim
                INNER JOIN BERKAS.Prodi pr ON pr.nim = n.nim
                WHERE
                    n.tujuan_notifikasi = 'Admin' AND
                    n.jenis_notifikasi = 'Tanggungan Prodi' AND
                    n.id_admin = :user_id
            SQL);
            $stmt->bindValue(':user_id', $user_id, \PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_CLASS, Notification::class);
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function getAdminTANotificationByUserID(string $user_id): array
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                SELECT 
                    n.id_notifikasi,
                    a.nama_lengkap AS 'admin',
                    m.nama_lengkap AS 'mahasiswa',
                    n.pesan,
                    pr.tanggal_request AS 'tanggal',
                    n.status_notifikasi AS 'status'
                FROM VER.Notifikasi n
                INNER JOIN USERS.Admin a ON a.id_admin  = n.id_admin
                INNER JOIN USERS.Mahasiswa m ON m.nim = n.nim
                INNER JOIN BERKAS.TA pr ON pr.nim = n.nim
                WHERE
                    n.tujuan_notifikasi = 'Admin' AND
                    n.jenis_notifikasi = 'Tanggungan TA' AND
                    n.id_admin = :user_id
            SQL);
            $stmt->bindValue(':user_id', $user_id, \PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_CLASS, Notification::class);
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function getMahasiswaNotificationByUserID(string $user_id): array
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                SELECT 
                    n.id_notifikasi,
                    a.nama_lengkap AS 'admin',
                    m.nama_lengkap AS 'mahasiswa',
                    n.pesan,
                    CONVERT(DATE, v.waktu_aktivitas) AS 'tanggal',
                    n.status_notifikasi AS 'status'
                FROM VER.Notifikasi n
                INNER JOIN USERS.Admin a ON a.id_admin  = n.id_admin
                INNER JOIN USERS.Mahasiswa m ON m.nim = n.nim
                INNER JOIN VER.LogAktivitas v ON v.id_admin = n.id_admin
                WHERE
                    n.tujuan_notifikasi = 'Mahasiswa' AND
                    n.nim = :user_id;
            SQL);
            $stmt->bindValue(':user_id', $user_id, \PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_CLASS, Notification::class);
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }
}
