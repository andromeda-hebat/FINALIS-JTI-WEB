<?php

require_once __DIR__ . '/../app/core/Router.php';
require_once __DIR__ . '/../app/controllers/Home.php';
require_once __DIR__ . '/../app/controllers/Auth.php';
require_once __DIR__ . '/../app/controllers/Students.php';
require_once __DIR__ . '/../app/controllers/Admin.php';

use App\Core\Router;
use App\Controllers\{Home, Auth, Students, Admin};


Router::add('GET', '/', Home::class, 'index');
Router::add('GET', '/kontak', Home::class,'contact');
Router::add('GET','/login', Auth::class,'viewLogin');
Router::add('POST', '/auth', Auth::class,'loginProcess');
Router::add('GET', '/dashboard', Home::class,'dashboard');
Router::add('GET', '/final-project-form', Students::class, 'finalProject');
Router::add('GET', '/administrasi-prodi', Students::class, 'administrasi');
Router::add('GET', '/riwayat-pengajuan-form', Students::class, 'riwayatPengajuan');
Router::add('GET', '/permintaan-surat', Students::class, 'permintaanSurat');


Router::add('GET', '/permintaan_verifikasi', Admin::class, 'requestVerifikasi');
Router::run();
