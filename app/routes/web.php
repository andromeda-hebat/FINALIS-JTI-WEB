<?php

require_once __DIR__ . '/../core/Router.php';
require_once __DIR__ . '/../controllers/HomeController.php';
require_once __DIR__ . '/../controllers/AuthController.php';
require_once __DIR__ . '/../controllers/StudentsController.php';
require_once __DIR__ . '/../controllers/AdminController.php';

use App\Core\Router;
use App\Controllers\{HomeController, AuthController, StudentsController, AdminController};


Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/kontak', HomeController::class,'contact');
Router::add('GET','/login', AuthController::class,'viewLogin');
Router::add('POST', '/auth', AuthController::class,'loginProcess');
Router::add('GET', '/dashboard', HomeController::class,'dashboard');

Router::add('GET', '/tugas-akhir', StudentsController::class, 'tugasAkhir');
Router::add('GET', '/administrasi-prodi', StudentsController::class, 'administrasiProdi');
Router::add('GET', '/riwayat-pengajuan', StudentsController::class, 'riwayatPengajuan');
Router::add('GET', '/permintaan-surat', StudentsController::class, 'permintaanSurat');

Router::add('GET', '/permintaan_verifikasi', AdminController::class, 'requestVerifikasi');
