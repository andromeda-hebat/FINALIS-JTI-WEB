<?php

namespace App\Repository;

use App\Core\Repository;
use App\Models\BerkasProdi;
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

    public function addNewBerkasTA(BerkasTA $berkas_TA): void
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
            $stmt->bindValue(':nim', $berkas_TA->nim, \PDO::PARAM_STR);
            $stmt->bindValue(':laporan_ta', $berkas_TA->laporan_ta, \PDO::PARAM_STR);
            $stmt->bindValue(':aplikasi', $berkas_TA->aplikasi, \PDO::PARAM_STR);
            $stmt->bindValue(':bukti_publikasi', $berkas_TA->bukti_publikasi, \PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage());
        }
    }

    public function addNewBerkasProdi(BerkasProdi $berkas_prodi): void
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
            $stmt->bindValue(':nim', $berkas_prodi->nim, \PDO::PARAM_STR);
            $stmt->bindValue(':toeic', $berkas_prodi->toeic, \PDO::PARAM_STR);
            $stmt->bindValue(':skripsi', $berkas_prodi->distribusi_skripsi, \PDO::PARAM_STR);
            $stmt->bindValue(':magang', $berkas_prodi->distribusi_magang, \PDO::PARAM_STR);
            $stmt->bindValue(':kompen', $berkas_prodi->surat_bebas_kompen, \PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage());
        }
    }
}