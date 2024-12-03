<?php

namespace App\Core;

class Database
{
    private static string $DB_SERVER;
    private static string $DB_NAME;
    private static string $DB_USER;
    private static string $DB_PASSWORD;
    private static ?\PDO $conn = null;

    private static function initialize(): void
    {
        self::$DB_SERVER = $_ENV['DB_HOST'] ?? throw new \Exception('DB_HOST not set');
        self::$DB_NAME = $_ENV['DB_NAME'] ?? throw new \Exception('DB_NAME not set');
        self::$DB_USER = $_ENV['DB_USER'] ?? throw new \Exception('DB_USER not set');
        self::$DB_PASSWORD = $_ENV['DB_PASSWORD'] ?? throw new \Exception('DB_PASSWORD not set');
    }

    public static function getConnectionWithouDB(): \PDO
    {
        self::initialize();

        $dsn = "sqlsrv:Server=" . self::$DB_SERVER;
        
        try {
            $conn = new \PDO($dsn, self::$DB_USER, self::$DB_PASSWORD);
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            throw new \Exception("Database connection failed: " . $e->getMessage());
        }
        
        return $conn;
    }

    public static function getConnection(): \PDO
    {
        if (self::$conn === null) {
            self::initialize();
            
            $dsn = "sqlsrv:Server=" . self::$DB_SERVER . ";Database=" . self::$DB_NAME;

            try {
                self::$conn = new \PDO($dsn, self::$DB_USER, self::$DB_PASSWORD);
                self::$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                throw new \Exception("Database connection failed: " . $e->getMessage());
            }
        }

        return self::$conn;
    }
}
