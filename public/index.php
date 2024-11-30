<?php

require_once __DIR__ . '/../app/routes/web.php';
require_once __DIR__ . '/../app/routes/api.php';

use App\Core\Router;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

Router::run();
