<?php

require_once __DIR__ . '/../core/Router.php';
require_once __DIR__ . '/../controllers/Home.php';
require_once __DIR__ . '/../controllers/AuthController.php';
require_once __DIR__ . '/../controllers/Students.php';
require_once __DIR__ . '/../controllers/AdminController.php';

use App\Core\Router;
use App\Controllers\{Home, AuthController, Students, AdminController};


Router::add('GET', '/', Home::class, 'index');
Router::add('GET', '/kontak', Home::class,'contact');
Router::add('GET','/login', AuthController::class,'viewLogin');
Router::add('POST', '/auth', AuthController::class,'loginProcess');
Router::add('GET', '/dashboard', Home::class,'dashboard');

Router::add('GET', '/final-project-form', Students::class, 'finalProject');
Router::add('GET', '/administrasi-prodi', Students::class, 'administrasi');
Router::add('GET', '/riwayat-pengajuan-form', Students::class, 'riwayatPengajuan');
Router::add('GET', '/permintaan-surat', Students::class, 'permintaanSurat');

Router::add('GET', '/permintaan_verifikasi', AdminController::class, 'requestVerifikasi');
