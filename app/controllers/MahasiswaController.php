<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\BerkasProdi;
use App\Models\BerkasTA;
use App\Repository\BerkasRepository;


class MahasiswaController extends Controller
{
    private BerkasRepository $berkas_repository;

    public function __construct()
    {
        $this->berkas_repository = new BerkasRepository();
    }

    public function tugasAkhir(): void
    {
        $this->view("templates/header", [
            'title'=>"Tugas Akhir",
            'css'=>["assets/css/sidebar"]
        ]);
        $this->view("pages/mahasiswa/tugas_akhir", [
            'active_page'=>"tugas_akhir"
        ]);
        $this->view("templates/footer");
    }

    public function processTugasAkhir(): void
    {
        if (isset($_FILES['tugas_akhir']) && isset($_FILES['program_aplikasi']) && isset($_FILES['publikasi_jurnal'])) {
            $upload_dir = [
                "tugas_akhir" => __DIR__ . "/../../storage/uploads/tugas_akhir/laporan_ta/",
                "program_aplikasi" => __DIR__ . "/../../storage/uploads/tugas_akhir/program_aplikasi/",
                "publikasi_jurnal" => __DIR__ . "/../../storage/uploads/tugas_akhir/publikasi_jurnal/"
            ];

            foreach ($upload_dir as $key => $path) {
                if (!is_dir($path)) {
                    mkdir($path, 0755, true);
                }
            }

            $is_move_uploaded_file_success = true;
            foreach ($_FILES as $key => &$value) {
                $value['new_name'] = uniqid() . '--' . basename($value['name']);
                $file_path = $upload_dir[$key] . $value['new_name'];

                if (!move_uploaded_file($value['tmp_name'], $file_path)) {
                    $is_move_uploaded_file_success = false;
                }
            }

            if ($is_move_uploaded_file_success) {
                try {
                    $this->berkas_repository->addNewBerkasTA(new BerkasTA($_SESSION['user_id'], $_FILES['tugas_akhir']['new_name'], $_FILES['program_aplikasi']['new_name'], $_FILES['publikasi_jurnal']['new_name']));

                    $_SESSION['status']['tugas_akhir'] = "diajukan";
                    http_response_code(200);
                    echo "Sukses mengirimkan formulir!";
                } catch (\Exception $e) {
                    http_response_code(500);
                    echo "Server error! Gagal menambahkan data ke database!";
                }
            } else {
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
            'active_page'=>"administrasi_prodi"
        ]);
        $this->view("templates/footer");
    }

    public function processAdministrasiProdi(): void {
        if (isset($_FILES['distribusi_tugas_akhir']) && isset($_FILES['distribusi_magang']) && isset($_FILES['bebas_kompen']) && isset($_FILES['toeic'])) {
            $upload_dir = [
                "distribusi_tugas_akhir" => __DIR__ . "/../../storage/uploads/administrasi_prodi/distribusi_tugas_akhir/",
                "distribusi_magang" => __DIR__ . "/../../storage/uploads/administrasi_prodi/distribusi_magang/",
                "bebas_kompen" => __DIR__ . "/../../storage/uploads/administrasi_prodi/bebas_kompen/",
                "toeic"=> __DIR__ . "/../../storage/uploads/administrasi_prodi/toeic/"
            ];

            foreach ($upload_dir as $key => $path) {
                if (!is_dir($path)) {
                    mkdir($path, 0755, true);
                }
            }

            $is_move_uploaded_file_success = true;
            foreach ($_FILES as $key => &$value) {
                $value['new_name'] = uniqid() . '--' . basename($value['name']);
                $file_path = $upload_dir[$key] . $value['new_name'];

                if (!move_uploaded_file($value['tmp_name'], $file_path)) {
                    $is_move_uploaded_file_success = false;
                }
            }

            if ($is_move_uploaded_file_success) {
                try {
                    $this->berkas_repository->addNewBerkasProdi(new BerkasProdi($_SESSION['user_id'], $_FILES['distribusi_tugas_akhir']['new_name'], $_FILES['distribusi_magang']['new_name'], $_FILES['bebas_kompen']['new_name'], $_FILES['toeic']['new_name']));

                    $_SESSION['status']['administrasi_prodi'] = "diajukan";
                    http_response_code(200);
                    echo "Sukses mengirimkan formulir!";
                } catch (\Exception $e) {
                    http_response_code(500);
                    echo "Server error! Gagal menambahkan data ke database!";
                }
            } else {
                http_response_code(500);
                echo "Gagal memasukkan file ke server";
            }
        } else {
            http_response_code(400);
            echo "Data tidak lengkap!";
        }
    }

    public function riwayatPengajuan(): void
    {
        $this->view("templates/header", [
            'title'=>"Riwayat Pengajuan",
            'css'=>["assets/css/sidebar"]
        ]);
        $this->view("pages/mahasiswa/riwayat_pengajuan", [
            'active_page'=>"riwayat_pengajuan",
            'req_history'=>$this->berkas_repository->getUserHistoryRequest($_SESSION['user_id'])
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
}
