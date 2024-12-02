<?php

namespace App\Controllers;

require_once __DIR__ . '/../core/Controller.php';


use App\Core\Controller;


class AdminJurusanController extends Controller {
    public function kelolaAdmin(): void {
        $data['title'] = "Kelola Admin";
        $data['css'] = ["assets/css/sidebar"];
        $this->view("templates/header",$data);
        $this->view("pages/admin_jurusan/kelola_admin");
        $this->view("templates/footer");
    }

    public function tambahAdmin(): void {
        $data['title'] = "Tambah Admin";
        $data['css'] = ["assets/css/sidebar"];
        $this->view("templates/header",$data);
        $this->view("pages/admin_jurusan/tambah_admin");
        $this->view("templates/footer");
    }
    public function editAdmin(): void {
        $data['title'] = "Edit Admin";
        $data['css'] = ["assets/css/sidebar"];
        $this->view("templates/header",$data);
        $this->view("pages/admin_jurusan/edit_admin");
        $this->view("templates/footer");
    }

    public function kelolaMhs(): void {
        $data['title'] = "Kelola Mahasiswa";
        $data['css'] = ["assets/css/sidebar"];
        $this->view("templates/header",$data);
        $this->view("pages/admin_jurusan/kelola_mahasiswa");
        $this->view("templates/footer");
    }

    public function tambahMhs(): void {
        $data['title'] = "Tambah Mahasiswa";
        $data['css'] = ["assets/css/sidebar"];
        $this->view("templates/header",$data);
        $this->view("pages/admin_jurusan/tambah_mahasiswa");
        $this->view("templates/footer");
    }
    public function editMhs(): void {
        $data['title'] = "Edit Mahasiswa";
        $data['css'] = ["assets/css/sidebar"];
        $this->view("templates/header",$data);
        $this->view("pages/admin_jurusan/edit_mahasiswa");
        $this->view("templates/footer");
    }
}