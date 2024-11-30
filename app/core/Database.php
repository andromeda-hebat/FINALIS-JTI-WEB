<?php

namespace App\Core;

class Database
{
    private string $DB_SERVER;
    private string $DB_NAME;
    private string $DB_USER;
    private string $DB_PASSWORD;
    private ?\PDO $conn = null;

    public function __construct()
    {
        $this->DB_SERVER = $_ENV['DB_HOST'] ?? throw new \Exception('DB_HOST not set');
        $this->DB_NAME = $_ENV['DB_NAME'] ?? throw new \Exception('DB_NAME not set');
        $this->DB_USER = $_ENV['DB_USER'] ?? throw new \Exception('DB_USER not set');
        $this->DB_PASSWORD = $_ENV['DB_PASSWORD'] ?? throw new \Exception('DB_PASSWORD not set');


        $dsn = "sqlsrv:Server=$this->DB_SERVER;Database=$this->DB_NAME";

        try {
            $this->conn = new \PDO($dsn, $this->DB_USER, $this->DB_PASSWORD);
        } catch (\PDOException $e) {
            echo "Error PDO connection: " . $e->getMessage();
        }
    }

    public function query(string $query): \PDOStatement
    {
        return $this->conn->query($query);
    }

    public function prepareQuery(string $query): \PDOStatement
    {
        return $this->conn->prepare($query);
    }
}
