<?php

namespace App\Repository;

use App\Core\Database;
use App\Helpers\ErrorLog;

class StatistikRepository
{
    public static function getStatisticRequest(string $jenis_berkas): bool|array
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                SELECT 
                    COUNT(*) AS total_pengajuan,
                    COUNT(CASE WHEN status_verifikasi = 'Disetujui' THEN 1 END) AS total_disetujui,
                    COUNT(CASE WHEN status_verifikasi = 'Ditolak' THEN 1 END) AS total_ditolak
                FROM VER.VerifikasiBerkas
                WHERE jenis_berkas = :jenis_berkas;
                SQL);
            $stmt->bindValue('jenis_berkas', $jenis_berkas, \PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function getTotalUserStatistic(): bool|array
    {
        try {
            return Database::getConnection()
                ->query(<<<SQL
                    SELECT 
                        (
                            SELECT COUNT(*)
                            FROM USERS.Mahasiswa
                        ) AS mahasiswa,
                        (
                            SELECT COUNT(*)
                            FROM USERS.Admin
                            WHERE jabatan = 'Admin Prodi'
                        ) AS admin_prodi,
                        (
                            SELECT COUNT(*)
                            FROM USERS.Admin
                            WHERE jabatan = 'Admin TA'
                        ) AS admin_ta;
                SQL)
                ->fetch();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function getTotalPaidOffAndUnpaidStudent(string $department): array
    {
        try {
            $stmt = Database::getConnection()
                ->prepare(<<<SQL
                    SELECT 
                        COUNT(CASE WHEN status = 'lunas' THEN 1 END) AS lunas,
                        COUNT(CASE WHEN status = 'belum_lunas' THEN 1 END) AS belum_lunas
                    FROM (
                        SELECT
                            t.nim,
                            CASE 
                            WHEN SUM(CASE WHEN jenis_tanggungan = 'Tanggungan TA' AND status_tanggungan = 'Selesai' THEN 1 ELSE 0 END) > 0
                                AND SUM(CASE WHEN jenis_tanggungan = 'Tanggungan Prodi' AND status_tanggungan = 'Selesai' THEN 1 ELSE 0 END) > 0
                            THEN 'lunas'
                            ELSE 'belum_lunas'
                            END AS status
                        FROM BERKAS.Tanggungan t
                        GROUP BY t.nim
                    ) AS raw
                    INNER JOIN USERS.Mahasiswa m ON raw.nim = m.nim
                    WHERE m.prodi = :department
                SQL);
            $stmt->bindValue(':department', $department, \PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }
}
