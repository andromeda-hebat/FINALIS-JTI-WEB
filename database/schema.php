<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;
use App\Core\Database;


(Dotenv::createImmutable(__DIR__ . '/../'))->load();


define('COLOR_RED', "\033[31m");
define('COLOR_GREEN', "\033[32m");
define('COLOR_BLUE', "\033[34m");
define('COLOR_RESET', "\033[0m");


echo COLOR_BLUE . "=======================================" . COLOR_RESET . PHP_EOL;
echo "--    FINALIS JTI DATABASE SCHEMA CREATION    --" . PHP_EOL;
echo "--    Please wait a minute...                 --" . PHP_EOL;
echo PHP_EOL;


// ======================================
// PHP Database schema logic start here
// ======================================

$sql_file = __DIR__ . '/schema.sql';

if (!file_exists($sql_file)) {
    die(COLOR_RED . "[!]  Error: The SQL file does not exist." . COLOR_RESET);
}



try {

    
    // $query_script = file_get_contents($sql_file);
    $query_script = mb_convert_encoding(file_get_contents($sql_file), 'UTF-16', 'UTF-8');
    $sql_statements = preg_split('/\bGO\b/i', $query_script);

    foreach ($sql_statements as $stmt) {
        $trimmed = trim($stmt);
        if (!empty($trimmed)) {
            Database::getConnection(false)->exec($trimmed);
        }
    }

    Database::getConnection(false)->exec($query_script);
    echo COLOR_GREEN . "[!]    Database schema sucessfully to be created!" . COLOR_RESET . PHP_EOL;
} catch (\Exception | \PDOException $e) {
    echo COLOR_RED . "[!]    There is something error happen: " . $e->getMessage() . COLOR_RESET . PHP_EOL;
}

echo COLOR_BLUE . "=======================================" . COLOR_RESET . PHP_EOL;
