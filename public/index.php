<?php

require_once __DIR__ . '/../app/core/Router.php';
require_once __DIR__ . '/../app/controllers/Home.php';
require_once __DIR__ . '/../app/controllers/Auth.php';

use App\Core\Router;
use App\Controllers\{Home, Auth};


Router::add('GET', '/', Home::class, 'index');
Router::add('GET', '/kontak', Home::class,'contact');
Router::add('GET','/login', Auth::class,'viewLogin');
Router::add('POST', '/auth', Auth::class,'loginProcess');
Router::add('GET', '/dashboard', Home::class,'dashboard');

Router::run();
