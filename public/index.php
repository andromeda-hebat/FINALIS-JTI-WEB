<?php

require_once __DIR__ . '/../app/core/Router.php';
require_once __DIR__ . '/../app/controllers/HomeController.php';
require_once __DIR__ . '/../app/controllers/Auth.php';

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/kontak', HomeController::class,'contact');
Router::add('GET','/login', Auth::class,'login');

Router::run();
