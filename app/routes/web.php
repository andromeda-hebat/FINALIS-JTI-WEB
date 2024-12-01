<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Core\Router;
use App\Controllers\{HomeController, AuthController, MahasiswaController, AdminProdiController, NotificationController};


// General
Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/kontak', HomeController::class,'contact');
Router::add('GET', '/dashboard', HomeController::class,'dashboard');


// Auth
Router::add('GET','/login', AuthController::class,'viewLogin');
Router::add('POST', '/login', AuthController::class,'login');
Router::add('POST', '/logout', AuthController::class,'logout');


// User: Mahasiswa
Router::add('GET', '/tugas-akhir', MahasiswaController::class, 'tugasAkhir');
Router::add('POST', '/tugas-akhir', MahasiswaController::class, 'processTugasAkhir');
Router::add('GET', '/ta-terkirim', MahasiswaController::class, 'tugasAkhirTerkirim');
Router::add('GET', '/ta-terverif', MahasiswaController::class, 'tugasAkhirTerverif');
Router::add('GET', '/administrasi-prodi', MahasiswaController::class, 'administrasiProdi');
Router::add('POST', '/administrasi-prodi', MahasiswaController::class, 'prosesAdministrasiProdi');
Router::add('GET', '/riwayat-pengajuan', MahasiswaController::class, 'riwayatPengajuan');
Router::add('GET', '/permintaan-surat', MahasiswaController::class, 'permintaanSurat');


// User: Admin Prodi
Router::add('GET', '/permintaan-verifikasi', AdminProdiController::class, 'requestVerifikasi');
Router::add('GET', '/detail-permintaan', AdminProdiController::class, 'detailsRequest');

//Notif
Router::add('GET', '/notifikasi', NotificationController::class, 'notif');
