<?php

namespace App\Repository;

use App\Core\Database;
use App\Models\RiwayatPengajuan;
use App\Helpers\ErrorLog;

class BerkasRepository
{
    public static function getBebasTanggunganStatus(string $user_id): string
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                SELECT *
                FROM table
                WHERE nim = ?
            SQL);
            $stmt->bindValue(1, $user_id);
            $stmt->execute();
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
            return "lunas";
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function getUserHistoryRequestBerkas(string $user_id): array
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                SELECT 
                    ROW_NUMBER() OVER (ORDER BY tanggal_request ASC) AS nomor,
                    tanggal_request AS tanggal_request,
                    jenis_berkas AS jenis_formulir,
                    status_verifikasi AS status,
                    keterangan_verifikasi AS keterangan
                FROM (
                    SELECT P.tanggal_request,
                        V.status_verifikasi,
                        V.keterangan_verifikasi,
                        'Formulir Administrasi Prodi' AS jenis_berkas 
                    FROM VER.VerifikasiBerkas V
                    INNER JOIN BERKAS.Prodi P ON P.id_berkas_prodi = V.id_berkas
                    WHERE P.nim = ?
                    UNION ALL
                    SELECT T.tanggal_request,
                        V.status_verifikasi,
                        V.keterangan_verifikasi,
                        'Formulir Tugas Akhir' AS jenis_berkas 
                    FROM VER.VerifikasiBerkas V
                    INNER JOIN BERKAS.TA T ON T.id_ta = V.id_berkas
                    WHERE T.nim = ?
                ) AS Combined
                ORDER BY tanggal_request ASC;
            SQL);
            $stmt->bindValue(1, $user_id, \PDO::PARAM_STR);
            $stmt->bindValue(2, $user_id, \PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_CLASS, RiwayatPengajuan::class);
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }
}
