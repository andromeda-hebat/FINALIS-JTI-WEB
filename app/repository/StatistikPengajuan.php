<?php
namespace App\Repository;

use App\Core\Repository;

class StatistikPengajuan extends Repository
{
    public function countAllPengajuan(string $user_id):bool|string
    {
        try{
            $query = <<<SQL
            SELECT COUNT(*) AS total_pengajuan_TA
            FROM VER.VerifikasiBerkas
            SQL;

            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $user_id);
            $stmt->execute();
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    
            if ($result == false) {
                return "kosong";
            } else {
                return $result['jumlah_semua_pengajuan'];
            }

        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage());
        }
        
    }

    public function countAllPengajuanDisetujui(string $user_id):bool|string
    {
        try{
            $query = <<<SQL
            SELECT COUNT(*) AS total_pengajuan_TA
            FROM VER.VerifikasiBerkas
            WHERE status_verifikasi = 'Disetujui'
            SQL;

            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $user_id);
            $stmt->execute();
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    
            if ($result == false) {
                return "kosong";
            } else {
                return $result['jumlah_semua_pengajuan_disetujui'];
            }

        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage());
        }
    }

    public function countAllPengajuanDitolak(string $user_id):bool|string
    {
        try{
            $query = <<<SQL
            SELECT COUNT(*) AS total_pengajuan_TA
            FROM VER.VerifikasiBerkas
            WHERE status_verifikasi = 'Ditolak'
            SQL;

            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $user_id);
            $stmt->execute();
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    
            if ($result == false) {
                return "kosong";
            } else {
                return $result['jumlah_semua_pengajuan_ditolak'];
            }

        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage());
        }
    }
    public function countAllPengajuanTA(string $user_id):bool|string
    {
        try{
            $query = <<<SQL
            SELECT COUNT(*) AS total_pengajuan_TA
            FROM VER.VerifikasiBerkas
            WHERE jenis_berkas = 'TA'
            SQL;

            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $user_id);
            $stmt->execute();
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    
            if ($result == false) {
                return "kosong";
            } else {
                return $result['jumlah_pengajuan_TA'];
            }

        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage());
        }
        
    }

    public function countPengajuanTADisetujui(string $user_id):bool|string
    {
        try{
            $query = <<<SQL
            SELECT COUNT(*) AS total_pengajuan_TA
            FROM VER.VerifikasiBerkas
            WHERE jenis_berkas = 'TA' AND status_verifikasi = 'Disetujui'
            SQL;

            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $user_id);
            $stmt->execute();
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    
            if ($result == false) {
                return "kosong";
            } else {
                return $result['jumlah_pengajuan_TA_disetujui'];
            }

        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage());
        }
    }

    public function countPengajuanTADitolak(string $user_id):bool|string
    {
        try{
            $query = <<<SQL
            SELECT COUNT(*) AS total_pengajuan_TA
            FROM VER.VerifikasiBerkas
            WHERE jenis_berkas = 'TA' AND status_verifikasi = 'Ditolak'
            SQL;

            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $user_id);
            $stmt->execute();
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    
            if ($result == false) {
                return "kosong";
            } else {
                return $result['jumlah_pengajuan_TA_ditolak'];
            }

        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage());
        }
    }

    public function countAllPengajuanProdi(string $user_id):bool|string
    {
        try{
            $query = <<<SQL
            SELECT COUNT(*) AS total_pengajuan_TA
            FROM VER.VerifikasiBerkas
            WHERE jenis_berkas = 'Prodi'
            SQL;

            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $user_id);
            $stmt->execute();
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    
            if ($result == false) {
                return "kosong";
            } else {
                return $result['jumlah_pengajuan_Prodi'];
            }

        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage());
        }
        
    }

    public function countPengajuanProdiDisetujui(string $user_id):bool|string
    {
        try{
            $query = <<<SQL
            SELECT COUNT(*) AS total_pengajuan_TA
            FROM VER.VerifikasiBerkas
            WHERE jenis_berkas = 'Prodi' AND status_verifikasi = 'Disetujui'
            SQL;

            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $user_id);
            $stmt->execute();
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    
            if ($result == false) {
                return "kosong";
            } else {
                return $result['jumlah_pengajuan_prodi_disetujui'];
            }

        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage());
        }
    }

    public function countPengajuanProdiDitolak(string $user_id):bool|string
    {
        try{
            $query = <<<SQL
            SELECT COUNT(*) AS total_pengajuan_TA
            FROM VER.VerifikasiBerkas
            WHERE jenis_berkas = 'TA' AND status_verifikasi = 'Ditolak'
            SQL;

            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $user_id);
            $stmt->execute();
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    
            if ($result == false) {
                return "kosong";
            } else {
                return $result['jumlah_pengajuan_prodi_ditolak'];
            }

        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage());
        }
    }
}
?>