<?php

namespace App\Core;

use PDO;
use PDOException;
use PDOStatement;

class Model {
    private Database $db;

    public function __construct() {
        $this->db = new Database();
    }

    protected function getConnection(): ?PDO {
        return $this->db->getConnection();
    }

    protected function query(string $query): ?PDOStatement {
        $result = null;
        try {
            return $this->getConnection()->query($query);
        } catch (PDOException $e) {
            echo "Error querying query: " . $e->getMessage();
        }

        return $result;
    }

    protected function execute(PDOStatement $stmt): void {
        try {
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error executing query: " . $e->getMessage();
        }
    }

    protected function getSingleData(PDOStatement $stmt): array {
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    protected function getAllData(PDOStatement $stmt): array {
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
