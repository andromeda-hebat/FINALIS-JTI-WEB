<?php

namespace App\Controllers;

require_once __DIR__ . '/../core/Controller.php';


use App\Core\Controller;


class Students extends Controller {

    public function tugasAkhir(): void {
        $data['title'] = "Tugas Akhir";
        $this->view("templates/header",$data);
        $this->view("pages/student/tugas_akhir");
        $this->view("templates/footer");
    }
    public function tugasAkhirTerkirim(): void {
        $data['title'] = "Tugas Akhir";
        $this->view("templates/header",$data);
        $this->view("pages/student/ta_terkirim");
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
        $this->view("pages/student/riwayat_pengajuan");
        $this->view("templates/footer");
    }
    public function permintaanSurat(): void {
        $data['title'] = "Permintaan Surat";
        $this->view("templates/header", $data);
        $this->view("pages/student/permintaan_surat");
        $this->view("templates/footer");
    }
}
