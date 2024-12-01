<?php

namespace App\Controllers;

use App\Core\Controller;


class MahasiswaController extends Controller {

    public function tugasAkhir(): void {
        $data['title'] = "Tugas Akhir";
        $data['active_page'] = "tugas_akhir";
        $data['css'] = ["assets/css/sidebar"];
        $this->view("templates/header",$data);
        $this->view("pages/mahasiswa/tugas_akhir", $data);
        $this->view("templates/footer");
    }

    public function processTugasAkhir(): void {
        var_dump($_FILES);
        if (isset($_FILES['tugas_akhir']) && isset($_FILES['program_aplikasi']) && isset($_FILES['publikasi_jurnal'])) {
            $upload_dir = [
                "tugas_akhir"=>__DIR__ . "/../../storage/tugas_akhir/",
                "program_aplikasi"=>__DIR__ . "/../../storage/program_aplikasi/",
                "publikasi_jurnal"=>__DIR__ . "/../../storage/publikasi_jurnal/"
            ];

            foreach ($upload_dir as $key => $path) {
                if (!is_dir($path)) {
                    mkdir($path, 0755, true);
                }
            }

            $is_move_uploaded_file_success = true;
            foreach ($_FILES as $key => $value) {
                $file_path = $upload_dir[$key] . uniqid() . '--' . basename($value['name']);
                
                if (!move_uploaded_file($value['tmp_name'], $file_path)) {
                    $is_move_uploaded_file_success = false;
                }
            }

            if (!$is_move_uploaded_file_success) {
                http_response_code(500);
                echo "Gagal memasukkan file ke server";
            }
        } else {
            http_response_code(400);
            echo "Data tidak lengkap!";
        }
    }

    public function tugasAkhirTerkirim(): void {
        $data['title'] = "Tugas Akhir";
        $data['css'] = ["assets/css/sidebar"];
        $this->view("templates/header",$data);
        $this->view("pages/mahasiswa/ta_terkirim");
        $this->view("templates/footer");
    }

    public function tugasAkhirTerverif(): void {
        $data["title"] = "Tugas Akhir";
        $data['css'] = ["assets/css/sidebar"];
        $this->view("templates/header",$data);
        $this->view("pages/mahasiswa/ta_terverifikasi");
        $this->view("templates/footer");
    }
    
    public function administrasiProdi(): void {
        $data['title'] = "Administrasi Prodi";
        $data['active_page'] = "administrasi_prodi";
        $data['css'] = ["assets/css/sidebar"];
        $this->view("templates/header", $data);
        $this->view("pages/mahasiswa/administrasi_prodi", $data);
        $this->view("templates/footer");
    }

    public function riwayatPengajuan(): void {
        $data['title'] = "Riwayat Pengajuan";
        $data['active_page'] = "riwayat_pengajuan";
        $data['css'] = ["assets/css/sidebar"];
        $this->view("templates/header", $data);
        $this->view("pages/mahasiswa/riwayat_pengajuan", $data);
        $this->view("templates/footer");
    }

    public function permintaanSurat(): void {
        $data['title'] = "Permintaan Surat";
        $data['active_page'] = "permintaan_surat";
        $data['css'] = ["assets/css/sidebar"];
        $this->view("templates/header", $data);
        $this->view("pages/mahasiswa/permintaan_surat", $data);
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
