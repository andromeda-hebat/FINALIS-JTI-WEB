<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Core\Router;
use App\Controllers\{HomeController, AuthController, StudentsController, AdminProdiController};


Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/kontak', HomeController::class,'contact');
Router::add('GET', '/dashboard', HomeController::class,'dashboard');

Router::add('GET','/login', AuthController::class,'viewLogin');
Router::add('POST', '/login', AuthController::class,'login');

Router::add('GET', '/tugas-akhir', StudentsController::class, 'tugasAkhir');
Router::add('GET', '/ta-terkirim', StudentsController::class, 'tugasAkhirTerkirim');
Router::add('GET', '/ta-terverif', StudentsController::class, 'tugasAkhirTerverif');
Router::add('GET', '/administrasi-prodi', StudentsController::class, 'administrasiProdi');
Router::add('POST', '/administrasi-prodi', StudentsController::class, 'prosesAdministrasiProdi');
Router::add('GET', '/riwayat-pengajuan', StudentsController::class, 'riwayatPengajuan');
Router::add('GET', '/permintaan-surat', StudentsController::class, 'permintaanSurat');

Router::add('GET', '/permintaan-verifikasi', AdminProdiController::class, 'requestVerifikasi');
Router::add('GET', '/detail-permintaan', AdminProdiController::class, 'detailsRequest');