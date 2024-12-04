<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Core\Router;
use App\Controllers\{HomeController, AuthController, MahasiswaController, AdminProdiController, AdminTAController, AdminJurusanController ,NotificationController};



// General
Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/kontak', HomeController::class,'contact');
Router::add('GET', '/dashboard', HomeController::class,'dashboard');


// Auth
Router::add('GET','/login', AuthController::class,'viewLogin');
Router::add('POST', '/login', AuthController::class,'login');
Router::add('POST', '/logout', AuthController::class,'logout');


//Notif
Router::add('GET', '/notifikasi', NotificationController::class, 'notif');


// User: Mahasiswa
Router::add('GET', '/tugas-akhir', MahasiswaController::class, 'tugasAkhir');
Router::add('POST', '/tugas-akhir', MahasiswaController::class, 'processTugasAkhir');
Router::add('GET', '/administrasi-prodi', MahasiswaController::class, 'administrasiProdi');
Router::add('POST', '/administrasi-prodi', MahasiswaController::class, 'processAdministrasiProdi');
Router::add('GET', '/riwayat-pengajuan', MahasiswaController::class, 'riwayatPengajuan');
Router::add('GET', '/permintaan-surat', MahasiswaController::class, 'permintaanSurat');


// User: Admin Prodi
Router::add('GET', '/permintaan-verifikasi', AdminProdiController::class, 'requestVerifikasi');
Router::add('GET', '/permintaan-verif-prodi/detail/([0-9]+)', AdminProdiController::class, 'showDetailReq');


// User: Admin TA
Router::add('GET', '/permintaan-verif-ta', AdminTAController::class, 'requestVerifikasi');
Router::add('GET', '/permintaan-verif-ta/detail/([0-9]+)', AdminTAController::class, 'showDetailReq');
Router::add('GET', '/detail-permintaan-ta', AdminTAController::class, 'detailsRequest');


//Admin Jurusan
Router::add('GET', '/kelola-admin', AdminJurusanController::class, 'kelolaAdmin');
Router::add('GET', '/tambah-admin', AdminJurusanController::class, 'tambahAdmin');
Router::add('GET', '/edit-admin', AdminJurusanController::class, 'editAdmin');
Router::add('GET', '/kelola-mahasiswa', AdminJurusanController::class, 'kelolaMhs');
Router::add('GET', '/tambah-mahasiswa', AdminJurusanController::class, 'tambahMhs');
Router::add('GET', '/edit-mahasiswa', AdminJurusanController::class, 'editMhs');

Router::add('GET', '/kelola-surat', AdminJurusanController::class, 'kelolaTemplateSurat');
Router::add('GET', '/tambah-surat', AdminJurusanController::class, 'tambahTemplateSurat');
Router::add('GET', '/log-aktivity', AdminJurusanController::class, 'catatanAktivitas');