<?php

namespace App\Repository;

use App\Core\Repository;
use App\Models\BerkasTA;

class BerkasRepository extends Repository
{
    public function checkUserBerkasTAStatus(string $user_id): bool|string
    {
        try {
            $query = <<<SQL
                SELECT status_verifikasi
                FROM VER.VerifikasiBerkas AS v
                INNER JOIN Berkas.TA AS p ON p.id_ta = v.id_berkas
                WHERE nim = ?
            SQL;
    
            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $user_id);
            $stmt->execute();
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    
            if ($result == false) {
                return "kosong";
            } else {
                return $result['status_verifikasi'];
            }
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage());
        }
    }

    public function checkUserBerkasProdiStatus(string $user_id): bool|string
    {
        $query = <<<SQL
            SELECT status_verifikasi
            FROM VER.VerifikasiBerkas AS v
            INNER JOIN Berkas.Prodi AS p ON p.id_berkas_prodi = v.id_berkas
            WHERE nim = :nim
        SQL;

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindValue(':nim', $user_id);
        $stmt->execute();
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        if ($result == false) {
            return "kosong";
        } else {
            return $result['status_verifikasi'];
        }
    }

    public function addNewBerkasTA(BerkasTA $berkasTA): void
    {
        try {
            $query = <<<SQL
                EXEC sp_InsertBerkasTA 
                    @nim = :nim,
                    @laporan_TA = :laporan_ta,
                    @aplikasi = :aplikasi,
                    @bukti_publikasi = :bukti_publikasi;
            SQL;

            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindValue(':nim', $berkasTA->nim, \PDO::PARAM_STR);
            $stmt->bindValue(':laporan_ta', $berkasTA->laporan_ta, \PDO::PARAM_STR);
            $stmt->bindValue(':aplikasi', $berkasTA->aplikasi, \PDO::PARAM_STR);
            $stmt->bindValue(':bukti_publikasi', $berkasTA->bukti_publikasi, \PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage());
        }
    }

    public function addNewBerkasProdi(string $nim, string $toeic, string $skripsi, string $magang, string $kompen): void
    {
        try {
            $query = <<<SQL
                EXEC sp_InsertBerkasProdi 
                    @nim = :nim,
                    @toeic = :toeic,
                    @distribusi_skripsi = :skripsi,
                    @distribusi_magang = :magang,
                    @surat_bebas_kompen = :kompen
            SQL;

            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindValue(':nim', $nim, \PDO::PARAM_STR);
            $stmt->bindValue(':toeic', $toeic, \PDO::PARAM_STR);
            $stmt->bindValue(':skripsi', $skripsi, \PDO::PARAM_STR);
            $stmt->bindValue(':magang', $magang, \PDO::PARAM_STR);
            $stmt->bindValue(':kompen', $kompen, \PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage());
        }
    }
}