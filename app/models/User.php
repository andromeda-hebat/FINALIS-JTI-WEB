<?php

namespace App\Models;

use App\Core\Model;


class User extends Model
{

    public function getUserDataByUserIDAndPassword(string $user_id, string $password): bool|array
    {
        $query = <<<SQL
            SELECT nim, nama_lengkap, password, 'mahasiswa' AS role
            FROM USERS.Mahasiswa
            WHERE nim = ? AND password = ?
            UNION 
            SELECT  id_admin, nama_lengkap, password, jabatan AS role
            FROM USERS.Admin
            WHERE id_admin = ? AND password = ?;
        SQL;

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(1, $user_id, \PDO::PARAM_STR);
        $stmt->bindParam(2,  $password, \PDO::PARAM_STR);
        $stmt->bindParam(3, $user_id, \PDO::PARAM_STR);
        $stmt->bindParam(4, $password, \PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}
