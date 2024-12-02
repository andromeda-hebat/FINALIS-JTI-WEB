<?php


namespace App\Models;

use PDO;
use App\Core\Model;


class Berkas extends Model
{

    public function checkUserBerkasTAStatus(string $user_id): bool|string
    {
        $query = <<<SQL
            SELECT status_verifikasi
            FROM VER.VerifikasiBerkas AS v
            INNER JOIN Berkas.TA AS p ON p.id_ta = v.id_berkas
            WHERE nim = ?
        SQL;

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(1, $user_id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result == false) {
            return "kosong";
        } else {
            return $result['status_verifikasi'];
        }
    }

    public function checkUserBerkasProdiStatus(string $user_id): bool|string
    {
        $query = <<<SQL
            SELECT status_verifikasi
            FROM VER.VerifikasiBerkas AS v
            INNER JOIN Berkas.Prodi AS p ON p.id_berkas_prodi = v.id_berkas
            WHERE nim = ?
        SQL;

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(1, $user_id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result == false) {
            return "kosong";
        } else {
            return $result['status_verifikasi'];
        }
    }
}
