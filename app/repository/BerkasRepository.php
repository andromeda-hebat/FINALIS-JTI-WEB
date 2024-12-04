<?php

namespace App\Repository;

use App\Core\Database;
use App\Core\Repository;
use App\Models\BerkasProdi;
use App\Models\BerkasTA;
use App\Models\RiwayatPengajuan;
use App\Models\VerifikasiBerkas;

class BerkasRepository extends Repository
{
    public function checkUserBerkasTAStatus(string $user_id): bool|string
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                SELECT status_verifikasi
                FROM VER.VerifikasiBerkas AS v
                INNER JOIN Berkas.TA AS p ON p.id_ta = v.id_berkas
                WHERE nim = ?
            SQL);
            $stmt->bindValue(1, $user_id);
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
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                SELECT status_verifikasi
                FROM VER.VerifikasiBerkas AS v
                INNER JOIN Berkas.Prodi AS p ON p.id_berkas_prodi = v.id_berkas
                WHERE nim = :nim
            SQL);
            $stmt->bindValue(':nim', $user_id);
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

    public function addNewBerkasTA(BerkasTA $berkas_TA): void
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                EXEC sp_InsertBerkasTA 
                    @nim = :nim,
                    @laporan_TA = :laporan_ta,
                    @aplikasi = :aplikasi,
                    @bukti_publikasi = :bukti_publikasi;
            SQL);
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
            $stmt = Database::getConnection()->prepare(<<<SQL
                EXEC sp_InsertBerkasProdi 
                    @nim = :nim,
                    @toeic = :toeic,
                    @distribusi_skripsi = :skripsi,
                    @distribusi_magang = :magang,
                    @surat_bebas_kompen = :kompen
            SQL);
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

    public function getUserHistoryRequest(string $user_id): array
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                SELECT id_berkas, jenis_berkas, status_verifikasi, keterangan_verifikasi
                FROM VER.VerifikasiBerkas AS vb
                INNER JOIN BERKAS.Prodi AS p ON vb.id_berkas = p.id_berkas_prodi AND vb.jenis_berkas = 'Prodi'
                INNER JOIN Berkas.TA AS ta ON vb.id_berkas = ta.id_ta AND vb.jenis_berkas = 'TA'
                INNER JOIN USERS.Mahasiswa AS m ON m.nim = p.nim OR m.nim = ta.nim
                WHERE m.nim = :nim;
            SQL);
            $stmt->bindValue(':nim', $user_id, \PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_CLASS, RiwayatPengajuan::class);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage());
        }
    }

    public function getAllBerkasTAReq(): array
    {
        try {
            $stmt = Database::getConnection()->query(<<<SQL
                SELECT 
                    vb.id_verifikasi, 
                    ta.id_ta AS id_berkas, 
                    m.nim, 
                    m.nama_lengkap, 
                    ta.tanggal_request, 
                    vb.status_verifikasi, 
                    vb.keterangan_verifikasi
                FROM VER.VerifikasiBerkas vb
                INNER JOIN BERKAS.TA ta ON vb.id_berkas = ta.id_ta
                INNER JOIN USERS.Mahasiswa m ON ta.nim = m.nim;
            SQL);
            return $stmt->fetchAll(\PDO::FETCH_CLASS, VerifikasiBerkas::class);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage());
        }
    }

    public function getAllBerkasProdiReq(): array
    {
        try {
            $stmt = Database::getConnection()->query(<<<SQL
                SELECT TOP 10 
                    v.id_verifikasi,
                    p.id_berkas_prodi AS id_berkas,
                    m.nim,
                    m.nama_lengkap,
                    p.tanggal_request,
                    v.status_verifikasi,
                    v.keterangan_verifikasi
                FROM USERS.Mahasiswa m
                INNER JOIN BERKAS.Prodi p ON m.nim = p.nim
                INNER JOIN VER.VerifikasiBerkas v ON v.id_berkas = p.id_berkas_prodi
            SQL);
            return $stmt->fetchAll(\PDO::FETCH_CLASS, VerifikasiBerkas::class);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage());
        }
    }

    public function getSingleBerkasTAReq(int $id_verifikasi): bool|VerifikasiBerkas
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                SELECT 
                    vb.id_verifikasi, 
                    ta.id_ta AS id_berkas, 
                    m.nim, 
                    m.nama_lengkap, 
                    ta.tanggal_request, 
                    vb.status_verifikasi, 
                    vb.keterangan_verifikasi
                FROM VER.VerifikasiBerkas vb
                INNER JOIN BERKAS.TA ta ON vb.id_berkas = ta.id_ta
                INNER JOIN USERS.Mahasiswa m ON ta.nim = m.nim
                WHERE vb.id_verifikasi = :id_verifikasi
            SQL);
            $stmt->bindValue(':id_verifikasi', $id_verifikasi, \PDO::PARAM_INT);
            $stmt->setFetchMode(\PDO::FETCH_CLASS, VerifikasiBerkas::class);
            return $stmt->fetch();
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage());
        }
    }

    public function getSingleBerkasProdiReq(int $id_verifikasi): bool|VerifikasiBerkas
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                SELECT
                    v.id_verifikasi,
                    p.id_berkas_prodi AS id_berkas,
                    m.nim,
                    m.nama_lengkap,
                    p.tanggal_request,
                    v.status_verifikasi,
                    v.keterangan_verifikasi
                FROM USERS.Mahasiswa m
                INNER JOIN BERKAS.Prodi p ON m.nim = p.nim
                INNER JOIN VER.VerifikasiBerkas v ON v.id_berkas = p.id_berkas_prodi
                WHERE v.id_verifikasi = :id_verifikasi
            SQL);
            $stmt->bindValue(':id_verifikasi', $id_verifikasi, \PDO::PARAM_INT);
            $stmt->setFetchMode(\PDO::FETCH_CLASS, VerifikasiBerkas::class);
            return $stmt->fetch();
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage());
        }
    }
}