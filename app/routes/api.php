<?php

require_once __DIR__ . '/../core/Router.php';
require_once __DIR__ . '/../controllers/AuthController.php';

use App\Core\Router;
use App\Controllers\AuthController;

Router::add('POST', '/api/auth', AuthController::class, 'adminLogin');
