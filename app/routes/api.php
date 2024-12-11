<?php

use App\Core\Router;
use App\Controllers\AuthController;

Router::add('POST', '/api/auth', AuthController::class, 'adminLogin');
