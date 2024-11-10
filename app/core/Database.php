<?php

namespace App\Core;

use PDO;
use PDOException;

class Database {
    private string $DB_SERVER = "";
    private string $DB_NAME = "";
    private string $DB_USER = "";
    private string $DB_PASSWORD = "";
    private ?PDO $conn = null;

    public function __construct() {
        $dsn = "sqlsrv:Server=$this->DB_SERVER;Database=$this->DB_NAME";
    
        try {
            $this->conn = new PDO($dsn, $this->DB_USER, $this->DB_PASSWORD);
        } catch (PDOException $e) {
            echo "Error PDO connection: " . $e->getMessage();
        }
    }

    public function getConnection(): ?PDO {
        return $this->conn;
    }
}
