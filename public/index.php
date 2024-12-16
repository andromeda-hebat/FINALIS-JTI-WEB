<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/routes/web.php';
require_once __DIR__ . '/../app/routes/api.php';


use App\Core\Router;
use Dotenv\Dotenv;

(Dotenv::createImmutable(realpath(__DIR__ . '/../')))->load();


session_set_cookie_params([
    'httponly' => true,
    'samesite' => 'Strict',
    'lifetime' => 3600,
]);

session_start();
session_regenerate_id(true);

Router::run();
