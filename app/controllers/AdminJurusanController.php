<?php

namespace App\Controllers;

require_once __DIR__ . '/../core/Controller.php';


use App\Core\Controller;


class AdminJurusanController extends Controller {
    public function kelolaAdmin(): void {
        $data['title'] = "Permintaan Verifikasi";
        $data['css'] = ["assets/css/sidebar"];
        $this->view("templates/header",$data);
        $this->view("pages/admin_jurusan/kelola_admin");
        $this->view("templates/footer");
    }

    public function tambahAdmin(): void {
        $data['title'] = "Permintaan Verifikasi";
        $data['css'] = ["assets/css/sidebar"];
        $this->view("templates/header",$data);
        $this->view("pages/admin_jurusan/tambah_admin");
        $this->view("templates/footer");
    }
    public function editAdmin(): void {
        $data['title'] = "Permintaan Verifikasi";
        $data['css'] = ["assets/css/sidebar"];
        $this->view("templates/header",$data);
        $this->view("pages/admin_jurusan/edit_admin");
        $this->view("templates/footer");
    }
}