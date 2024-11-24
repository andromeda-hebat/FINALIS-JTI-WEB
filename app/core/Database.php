<?php


namespace App\Core;

require_once __DIR__ . '/../config/config.php';

use PDO;
use PDOException;
use PDOStatement;

class Database
{
    private string $DB_SERVER = DB_SERVER;
    private string $DB_NAME = DB_NAME;
    private string $DB_USER = DB_USER;
    private string $DB_PASSWORD = DB_PASSWORD;
    private ?PDO $conn = null;

    public function __construct()
    {
        $dsn = "sqlsrv:Server=$this->DB_SERVER;Database=$this->DB_NAME";

        try {
            $this->conn = new PDO($dsn, $this->DB_USER, $this->DB_PASSWORD);
        } catch (PDOException $e) {
            echo "Error PDO connection: " . $e->getMessage();
        }
    }

    public function query(string $query): PDOStatement
    {
        return $this->conn->query($query);
    }

    public function prepareQuery(string $query): PDOStatement
    {
        return $this->conn->prepare($query);
    }
}
