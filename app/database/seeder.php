<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Dotenv\Dotenv;
use App\Core\Database;


$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();


define('COLOR_RED', "\033[31m");
define('COLOR_GREEN', "\033[32m");
define('COLOR_BLUE', "\033[34m");
define('COLOR_RESET', "\033[0m");


echo COLOR_BLUE . "=======================================" . COLOR_RESET . PHP_EOL;
echo "--    FINALIS JTI DATABASE SEEDER    --" . PHP_EOL;
echo "--    Please wait a minute...        --" . PHP_EOL;
echo PHP_EOL;


// ======================================
// PHP Database seeder logic start here
// ======================================

$sql_file = __DIR__ . '/seeder.sql';

if (!file_exists($sql_file)) {
    die(COLOR_RED . "[!]  Error: The SQL file does not exist." . COLOR_RESET);
}

$query_script = file_get_contents($sql_file);


try {
    Database::getConnection()->exec($query_script);
    echo COLOR_GREEN . "[!]    Database seeder sucessfully to be inserted!" . COLOR_RESET . PHP_EOL;
} catch (\Exception | \PDOException $e) {
    echo COLOR_RED . "[!]    There is something error happen: " . $e->getMessage() . COLOR_RESET . PHP_EOL;
}

echo COLOR_BLUE . "=======================================" . COLOR_RESET . PHP_EOL;
