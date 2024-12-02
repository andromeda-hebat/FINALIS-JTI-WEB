<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Berkas;


class MahasiswaController extends Controller
{

    private Berkas $berkas;

    public function __construct()
    {
        $this->berkas = new Berkas();
    }

    public function tugasAkhir(): void
    {
        $this->view("templates/header", [
            'title'=>"Tugas Akhir",
            'css'=>["assets/css/sidebar"]
        ]);
        $this->view("pages/mahasiswa/tugas_akhir", [
            'active_page'=>"tugas_akhir",
            'req_status'=>$this->berkas->checkUserBerkasTAStatus($_SESSION['user_id'])
        ]);
        $this->view("templates/footer");
    }

    public function processTugasAkhir(): void
    {
        var_dump($_FILES);
        if (isset($_FILES['tugas_akhir']) && isset($_FILES['program_aplikasi']) && isset($_FILES['publikasi_jurnal'])) {
            $upload_dir = [
                "tugas_akhir" => __DIR__ . "/../../storage/tugas_akhir/",
                "program_aplikasi" => __DIR__ . "/../../storage/program_aplikasi/",
                "publikasi_jurnal" => __DIR__ . "/../../storage/publikasi_jurnal/"
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

    public function administrasiProdi(): void
    {
        $this->view("templates/header", [
            'title'=>"Administrasi Prodi",
            'css'=>["assets/css/sidebar"]
        ]);
        $this->view("pages/mahasiswa/administrasi_prodi", [
            'active_page'=>"administrasi_prodi",
        ]);
        $this->view("templates/footer");
    }

    public function riwayatPengajuan(): void
    {
        $this->view("templates/header", [
            'title'=>"Riwayat Pengajuan",
            'css'=>["assets/css/sidebar"]
        ]);
        $this->view("pages/mahasiswa/riwayat_pengajuan", [
            'active_page'=>"riwayat_pengajuan"
        ]);
        $this->view("templates/footer");
    }

    public function permintaanSurat(): void
    {
        $this->view("templates/header", [
            'title'=>"Permintaan Surat",
            'css'=>["assets/css/sidebar"]
        ]);
        $this->view("pages/mahasiswa/permintaan_surat", [
            'active_page'=>"permintaan_surat",
        ]);
        $this->view("templates/footer");
    }

    public function prosesAdministrasiProdi(): void
    {
        $report = $_POST['thesis'];
        $internship = $_POST['internship'];
        $compensation = $_POST['compensation'];
        $toeic = $_POST['toeic'];

        echo "Still in process";
    }
}
