<?php

namespace App\Core;

use App\Helpers\ErrorLog;

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

    private static function getDBConnection(string $dsn): \PDO
    {
        try {
            $conn = new \PDO($dsn, self::$DB_USER, self::$DB_PASSWORD);
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }

        return $conn;
    }

    public static function getConnection(bool $is_with_db = true, string $db_type = 'Microsoft SQL Server'): \PDO
    {
        if (self::$conn === null) {
            self::initialize();
        }

        $dsn = '';

        if ($is_with_db) {
            switch ($db_type) {
                case 'Microsoft SQL Server':
                    $dsn = "sqlsrv:Server=" . self::$DB_SERVER . ";Database=" . self::$DB_NAME;
                    break;
                case 'MySQL':
                case 'MariaDB':
                    $dsn = "mysql:host=" . self::$DB_SERVER . ";dbname=" . self::$DB_NAME;
                    break;
                default:
                    throw new \InvalidArgumentException("Unsupported database type: $db_type");
            }
        } else {
            switch ($db_type) {
                case 'Microsoft SQL Server':
                    $dsn = "sqlsrv:Server=" . self::$DB_SERVER;
                    break;
                case 'MySQL':
                case 'MariaDB':
                    $dsn = "mysql:host=" . self::$DB_SERVER;
                    break;
                default:
                    throw new \InvalidArgumentException("Unsupported database type: $db_type");
            }
        }

        if (self::$conn === null || !$is_with_db) {
            self::$conn = self::getDBConnection($dsn);
        }

        return self::$conn;
    }

}
