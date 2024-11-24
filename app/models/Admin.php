<?php


namespace App\Models;

require_once __DIR__ . '/../core/Model.php';

use PDO;
use App\Core\Model;


class Admin extends Model {
    public function checkUserIsAvailable(string $username, string $password): bool {
        $query = "SELECT * FROM Admin WHERE name = ? AND password = ?";

        $stmt = $this->db->prepareQuery($query);
        $stmt->bindParam(1, $username);
        $stmt->bindParam(2, $password);
        $stmt->execute();
        $result =  $stmt->fetch(PDO::FETCH_ASSOC);
        return ($result === false) ? false : true;
    }
}
