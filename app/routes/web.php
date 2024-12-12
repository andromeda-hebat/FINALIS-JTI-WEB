<?php

use App\Core\Router;
use App\Middlewares\{AuthMiddleware};
use App\Controllers\{HomeController, AuthController, MahasiswaController, AdminProdiController, AdminTAController, AdminJurusanController ,NotificationController};



// General
Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/kontak', HomeController::class,'contact');

Router::add('GET', '/dashboard', HomeController::class,'dashboard', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'any'
    ]
]);
Router::add('GET', '/notifikasi', NotificationController::class, 'notif', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'any'
    ]
]);


// Auth
Router::add('GET','/login', AuthController::class,'viewLogin');
Router::add('POST', '/login', AuthController::class,'login');
Router::add('POST', '/logout', AuthController::class,'logout');


// User: Mahasiswa
Router::add('GET', '/tugas-akhir', MahasiswaController::class, 'tugasAkhir', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'mahasiswa'
    ]
]);
Router::add('POST', '/tugas-akhir', MahasiswaController::class, 'processTugasAkhir', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'mahasiswa'
    ]
]);
Router::add('GET', '/administrasi-prodi', MahasiswaController::class, 'administrasiProdi', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'mahasiswa'
    ]
]);
Router::add('POST', '/administrasi-prodi', MahasiswaController::class, 'processAdministrasiProdi', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'mahasiswa'
    ]
]);
Router::add('GET', '/riwayat-pengajuan', MahasiswaController::class, 'riwayatPengajuan', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'mahasiswa'
    ]
]);
Router::add('GET', '/permintaan-surat', MahasiswaController::class, 'permintaanSurat', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'mahasiswa'
    ]
]);


// User: Admin Prodi
Router::add('GET', '/permintaan-verifikasi-prodi', AdminProdiController::class, 'requestVerifikasi', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin prodi'
    ]
]);
Router::add('GET', '/permintaan-verifikasi-prodi/detail/([0-9]+)', AdminProdiController::class, 'showDetailReq', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin prodi'
    ]
]);
Router::add('PATCH', '/permintaan-verifikasi-prodi/detail/([0-9]+)', AdminProdiController::class, 'verifyBerkas', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin prodi'
    ]
]);


// User: Admin TA
Router::add('GET', '/permintaan-verifikasi-ta', AdminTAController::class, 'requestVerifikasi', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin ta'
    ]
]);
Router::add('GET', '/permintaan-verifikasi-ta/detail/([0-9]+)', AdminTAController::class, 'showDetailReq', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin ta'
    ]
]);
Router::add('PATCH', '/permintaan-verifikasi-ta/detail/([0-9]+)', AdminTAController::class, 'verifyBerkas', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin ta'
    ]
]);


// User: Admin Jurusan
Router::add('GET', '/kelola-admin', AdminJurusanController::class, 'kelolaAdmin', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin jurusan'
    ]
]);
Router::add('GET', '/tambah-admin', AdminJurusanController::class, 'tambahAdmin', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin jurusan'
    ]
]);
Router::add('GET', '/edit-admin', AdminJurusanController::class, 'editAdmin', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin jurusan'
    ]
]);
Router::add('GET', '/kelola-mahasiswa', AdminJurusanController::class, 'kelolaMhs', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin jurusan'
    ]
]);
Router::add('GET', '/tambah-mahasiswa', AdminJurusanController::class, 'tambahMhs', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin jurusan'
    ]
]);
Router::add('GET', '/edit-mahasiswa', AdminJurusanController::class, 'editMhs', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin jurusan'
    ]
]);
Router::add('GET', '/kelola-surat', AdminJurusanController::class, 'kelolaTemplateSurat', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin jurusan'
    ]
]);
Router::add('GET', '/tambah-surat', AdminJurusanController::class, 'tambahTemplateSurat', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin jurusan'
    ]
]);
Router::add('GET', '/log-aktivity', AdminJurusanController::class, 'catatanAktivitas', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin jurusan'
    ]
]);
