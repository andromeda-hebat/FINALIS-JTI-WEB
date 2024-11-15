<?php

namespace App\Controllers;

require_once __DIR__ . '/../core/Controller.php';


use App\Core\Controller;


class Students extends Controller {

    public function __construct() {
        
    }
    public function finalProject(): void {
        $data['title'] = "Tugas Akhir";
        $this->view("templates/header",$data);
        $this->view("pages/student/final_project_form");
        $this->view("templates/footer");
    }
    
    public function administrasi(): void {
        $data['title'] = "Administrasi Prodi";
        $this->view("templates/header", $data);
        $this->view("pages/student/administrasi_prodi");
        $this->view("templates/footer");
    }
    public function riwayatPengajuan(): void {
        $data['title'] = "Riwayat Pengajuan";
        $this->view("templates/header", $data);
        $this->view("pages/student/riwayat_pengajuan_form");
        $this->view("templates/footer");
    }
}
