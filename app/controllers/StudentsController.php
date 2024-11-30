<?php

namespace App\Controllers;

use App\Core\Controller;


class StudentsController extends Controller {

    public function tugasAkhir(): void {
        $data['title'] = "Tugas Akhir";
        $data['active_page'] = "tugas_akhir";
        $this->view("templates/header",$data);
        $this->view("pages/student/tugas_akhir", $data);
        $this->view("templates/footer");
    }
  
    public function tugasAkhirTerkirim(): void {
        $data['title'] = "Tugas Akhir";
        $this->view("templates/header",$data);
        $this->view("pages/student/ta_terkirim");
        $this->view("templates/footer");
    }
    public function tugasAkhirTerverif(){
        $data["title"] = "Tugas Akhir";
        $this->view("templates/header",$data);
        $this->view("pages/student/ta_terverifikasi");
        $this->view("templates/footer");

    }
    
    public function administrasiProdi(): void {
        $data['title'] = "Administrasi Prodi";
        $data['active_page'] = "administrasi_prodi";
        $this->view("templates/header", $data);
        $this->view("pages/student/administrasi_prodi", $data);
        $this->view("templates/footer");
    }
    public function riwayatPengajuan(): void {
        $data['title'] = "Riwayat Pengajuan";
        $data['active_page'] = "riwayat_pengajuan";
        $this->view("templates/header", $data);
        $this->view("pages/student/riwayat_pengajuan", $data);
        $this->view("templates/footer");
    }
    public function permintaanSurat(): void {
        $data['title'] = "Permintaan Surat";
        $data['active_page'] = "permintaan_surat";
        $this->view("templates/header", $data);
        $this->view("pages/student/permintaan_surat", $data);
        $this->view("templates/footer");
    }

    public function prosesAdministrasiProdi(): void {
        $report = $_POST['thesis'];
        $internship = $_POST['internship'];
        $compensation = $_POST['compensation'];
        $toeic = $_POST['toeic'];

        echo "Still in process";
    }
}
