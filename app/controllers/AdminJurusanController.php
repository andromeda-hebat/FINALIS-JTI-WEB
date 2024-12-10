<?php

namespace App\Controllers;

use App\Core\Controller;

class AdminJurusanController extends Controller
{
    public function kelolaAdmin(): void
    {
        $this->view("templates/header", [
            'title' => "Kelola Admin",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_jurusan/kelola_admin");
        $this->view("templates/footer");
    }

    public function tambahAdmin(): void
    {
        $this->view("templates/header", [
            'title' => "Tambah Admin",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_jurusan/tambah_admin");
        $this->view("templates/footer");
    }
    public function editAdmin(): void
    {
        $this->view("templates/header", [
            'title' => "Edit Admin",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_jurusan/edit_admin");
        $this->view("templates/footer");
    }

    public function kelolaMhs(): void
    {
        $this->view("templates/header", [
            'title' => "Kelola Mahasiswa",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_jurusan/kelola_mahasiswa");
        $this->view("templates/footer");
    }

    public function tambahMhs(): void
    {
        $this->view("templates/header", [
            'title' => "Tambah Mahasiswa",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_jurusan/tambah_mahasiswa");
        $this->view("templates/footer");
    }
    public function editMhs(): void
    {
        $this->view("templates/header", [
            'title' => "Edit Mahasiswa",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_jurusan/edit_mahasiswa");
        $this->view("templates/footer");
    }

    public function kelolaTemplateSurat(): void
    {
        $this->view("templates/header", [
            'title' => "Kelola Template Surat",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_jurusan/kelola_surat");
        $this->view("templates/footer");
    }

    public function tambahTemplateSurat(): void
    {
        $this->view("templates/header", [
            'title' => "Tambah Template Surat",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_jurusan/tambah_surat");
        $this->view("templates/footer");
    }
    public function catatanAktivitas(): void
    {
        $this->view("templates/header", [
            'title' => "Log Aktivitas",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_jurusan/catatan_aktivitas");
        $this->view("templates/footer");
    }
}