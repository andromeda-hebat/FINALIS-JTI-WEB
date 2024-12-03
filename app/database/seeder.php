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


// ======================================
// PHP Database seeder logic start here
// ======================================

$query = <<<SQL
    INSERT INTO USERS.Mahasiswa
        (nim, nama_lengkap, password, email, jurusan, prodi, foto_profil, tahun_masuk)
    VALUES
    ('121212', 'Budi Setiawan', '121212', 'abc@gmail.com', 'Teknologi Informasi', 'D4 Teknik Informatika', 'abc.png', '2020');
SQL;


try {
    $db = new Database();
    $stmt = $db->getConnection()->query($query);
    echo COLOR_GREEN . "[!]    Database seeder sucessfully to be inserted!" . COLOR_RESET . PHP_EOL;
} catch (\PDOException $e) {
    echo COLOR_RED . "[!]    There is something error happen: " . $e->getMessage() . COLOR_RESET . PHP_EOL;
}

echo COLOR_BLUE . "=======================================" . COLOR_RESET . PHP_EOL;
