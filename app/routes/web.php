<?php

use App\Core\Router;
use App\Middlewares\{AuthMiddleware};
use App\Controllers\{HomeController, AuthController, MahasiswaController, AdminProdiController, AdminTAController, AdminJurusanController ,NotifikasiController};



// General
Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/kontak', HomeController::class,'viewContact');

Router::add('GET', '/dashboard', HomeController::class,'viewDashboard', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'any'
    ]
]);
Router::add('GET', '/notifikasi', NotifikasiController::class, 'viewNotification', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'any'
    ]
]);
Router::add('GET', '/uploads', HomeController::class, 'viewUploadFile', [
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
Router::add('GET', '/tugas-akhir', MahasiswaController::class, 'viewTugasAkhir', [
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
Router::add('GET', '/administrasi-prodi', MahasiswaController::class, 'viewAdministrasiProdi', [
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
Router::add('GET', '/riwayat-pengajuan', MahasiswaController::class, 'viewRiwayatPengajuan', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'mahasiswa'
    ]
]);
Router::add('GET', '/permintaan-surat', MahasiswaController::class, 'viewPermintaanSurat', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'mahasiswa'
    ]
]);
Router::add('GET', '/panduan-surat', MahasiswaController::class, 'viewPanduan', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'mahasiswa'
    ]
]);


// User: Admin Prodi
Router::add('GET', '/permintaan-verifikasi-prodi', AdminProdiController::class, 'viewRequestVerifikasi', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin prodi'
    ]
]);
Router::add('GET', '/permintaan-verifikasi-prodi/detail/([0-9]+)', AdminProdiController::class, 'viewDetailRequest', [
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
Router::add('GET', '/permintaan-verifikasi-ta', AdminTAController::class, 'viewRequestVerifikasi', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin ta'
    ]
]);
Router::add('GET', '/permintaan-verifikasi-ta/detail/([0-9]+)', AdminTAController::class, 'viewDetailRequest', [
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
Router::add('GET', '/kelola-admin', AdminJurusanController::class, 'viewKelolaAdmin', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin jurusan'
    ]
]);
Router::add('GET', '/kelola-admin/tambah', AdminJurusanController::class, 'viewTambahAdmin', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin jurusan'
    ]
]);
Router::add('POST', '/kelola-admin/tambah', AdminJurusanController::class, 'addNewAdmin', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin jurusan'
    ]
]);
Router::add('GET', '/kelola-admin/edit/([a-zA-Z0-9]+)', AdminJurusanController::class, 'viewEditAdmin', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin jurusan'
    ]
]);
Router::add('PATCH', '/kelola-admin/edit', AdminJurusanController::class, 'editAdminData', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin jurusan'
    ]
]);
Router::add('DELETE', '/kelola-admin/([a-zA-Z0-9]+)', AdminJurusanController::class, 'deleteAdminData', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin jurusan'
    ]
]);
Router::add('GET', '/kelola-mahasiswa', AdminJurusanController::class, 'viewkelolaMahasiswa', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin jurusan'
    ]
]);
Router::add('GET', '/kelola-mahasiswa/tambah', AdminJurusanController::class, 'viewTambahMahasiswa', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin jurusan'
    ]
]);
Router::add('POST', '/kelola-mahasiswa/tambah', AdminJurusanController::class, 'addNewMahasiswa', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin jurusan'
    ]
]);
Router::add('GET', '/kelola-mahasiswa/edit/([0-9]+)', AdminJurusanController::class, 'viewEditMahasiswa', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin jurusan'
    ]
]);
Router::add('PATCH', '/kelola-mahasiswa/edit', AdminJurusanController::class, 'editMahasiswaData', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin jurusan'
    ]
]);
Router::add('DELETE', '/kelola-mahasiswa/([a-zA-Z0-9]+)', AdminJurusanController::class, 'deleteMahasiswaData', [
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
Router::add('GET', '/laporan', AdminJurusanController::class, 'viewLaporan', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin jurusan'
    ]
]);
Router::add('GET', '/laporan/laporan-umum', AdminJurusanController::class, 'viewLaporanUmum', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'admin jurusan'
    ]
]);
Router::add('GET', '/api/laporan/laporan-umum/([a-zA-Z0-9]+)', AdminJurusanController::class, 'viewLaporanUmum', [
    [
        'class' => AuthMiddleware::class,
        'function' => 'checkAuth',
        'args' => 'desktop'
    ]
]);