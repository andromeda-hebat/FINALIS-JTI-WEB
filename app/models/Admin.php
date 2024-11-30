<?php


namespace App\Models;

use PDO;
use App\Core\Model;


class Admin extends Model
{
    public function checkUserIsAvailable(string $username, string $password): bool|array
    {
        $query = "SELECT * FROM USERS.Admin WHERE nama_lengkap = ? AND password = ?";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(1, $username);
        $stmt->bindParam(2, $password);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
