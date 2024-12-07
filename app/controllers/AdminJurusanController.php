<?php

namespace App\Controllers;

use App\Helpers\ViewHelper;

class AdminJurusanController
{
    public function kelolaAdmin(): void
    {
        ViewHelper::view("templates/header", [
            'title' => "Kelola Admin",
            'css' => ["assets/css/sidebar"]
        ]);
        ViewHelper::view("pages/admin_jurusan/kelola_admin");
        ViewHelper::view("templates/footer");
    }

    public function tambahAdmin(): void
    {
        ViewHelper::view("templates/header", [
            'title' => "Tambah Admin",
            'css' => ["assets/css/sidebar"]
        ]);
        ViewHelper::view("pages/admin_jurusan/tambah_admin");
        ViewHelper::view("templates/footer");
    }
    public function editAdmin(): void
    {
        ViewHelper::view("templates/header", [
            'title' => "Edit Admin",
            'css' => ["assets/css/sidebar"]
        ]);
        ViewHelper::view("pages/admin_jurusan/edit_admin");
        ViewHelper::view("templates/footer");
    }

    public function kelolaMhs(): void
    {
        ViewHelper::view("templates/header", [
            'title' => "Kelola Mahasiswa",
            'css' => ["assets/css/sidebar"]
        ]);
        ViewHelper::view("pages/admin_jurusan/kelola_mahasiswa");
        ViewHelper::view("templates/footer");
    }

    public function tambahMhs(): void
    {
        ViewHelper::view("templates/header", [
            'title' => "Tambah Mahasiswa",
            'css' => ["assets/css/sidebar"]
        ]);
        ViewHelper::view("pages/admin_jurusan/tambah_mahasiswa");
        ViewHelper::view("templates/footer");
    }
    public function editMhs(): void
    {
        ViewHelper::view("templates/header", [
            'title' => "Edit Mahasiswa",
            'css' => ["assets/css/sidebar"]
        ]);
        ViewHelper::view("pages/admin_jurusan/edit_mahasiswa");
        ViewHelper::view("templates/footer");
    }

    public function kelolaTemplateSurat(): void
    {
        ViewHelper::view("templates/header", [
            'title' => "Kelola Template Surat",
            'css' => ["assets/css/sidebar"]
        ]);
        ViewHelper::view("pages/admin_jurusan/kelola_surat");
        ViewHelper::view("templates/footer");
    }

    public function tambahTemplateSurat(): void
    {
        ViewHelper::view("templates/header", [
            'title' => "Tambah Template Surat",
            'css' => ["assets/css/sidebar"]
        ]);
        ViewHelper::view("pages/admin_jurusan/tambah_surat");
        ViewHelper::view("templates/footer");
    }
    public function catatanAktivitas(): void
    {
        ViewHelper::view("templates/header", [
            'title' => "Log Aktivitas",
            'css' => ["assets/css/sidebar"]
        ]);
        ViewHelper::view("pages/admin_jurusan/catatan_aktivitas");
        ViewHelper::view("templates/footer");
    }
}