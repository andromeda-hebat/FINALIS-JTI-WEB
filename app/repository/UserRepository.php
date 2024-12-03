<?php

namespace App\Repository;

use App\Core\Repository;
use App\Models\Admin;
use App\Models\User;

class UserRepository extends Repository
{
    public function getUserDataByUserIDAndPassword(string $user_id, string $password): bool|User
    {
        $query = <<<SQL
            SELECT nim AS user_id, nama_lengkap, password, 'mahasiswa' AS role, foto_profil
            FROM USERS.Mahasiswa
            WHERE nim = ? AND password = ?
            UNION 
            SELECT  id_admin AS user_id, nama_lengkap, password, jabatan AS role, foto_profil
            FROM USERS.Admin
            WHERE id_admin = ? AND password = ?;
        SQL;

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindValue(1, $user_id, \PDO::PARAM_STR);
        $stmt->bindValue(2, $password, \PDO::PARAM_STR);
        $stmt->bindValue(3, $user_id, \PDO::PARAM_STR);
        $stmt->bindValue(4, $password, \PDO::PARAM_STR);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, User::class);
        return $stmt->fetch();
    }

    public function getAdminDataByUserIDAndPassword(string $id_admin, string $password): bool|Admin
    {
        $query = <<<SQL
            SELECT * FROM USERS.Admin 
            WHERE id_admin = :id_admin AND password = :password
        SQL;

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindValue(':id_admin', $id_admin);
        $stmt->bindValue(':password', $password);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'Admin');
        return $stmt->fetch();
    }
}