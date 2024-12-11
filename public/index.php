<?php

use App\Core\Router;
use Dotenv\Dotenv;

(Dotenv::createImmutable(__DIR__ . '/../'))->load();

session_start();
Router::run();
