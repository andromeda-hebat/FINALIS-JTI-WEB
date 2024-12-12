<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Helpers\FileManager;
use App\Models\{BerkasProdi, BerkasTA};
use App\Repository\{BerkasRepository, BerkasProdiRepository, BerkasTARepository};

class MahasiswaController extends Controller
{
    public function viewTugasAkhir(): void
    {
        try {
            $status_ta = BerkasTARepository::getStatusBerkasTA($_SESSION['user_id']);
        } catch (\Exception $e) {
            http_response_code(500);
            echo json_encode([
                "status" => "error",
                "message" => "Database connectivity error!"
            ]);
            exit;
        }

        $this->view("templates/header", [
            'title' => "Tugas Akhir",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/mahasiswa/tugas_akhir", [
            'active_page' => "tugas-akhir",
            'info_berkas' => $status_ta
        ]);
        $this->view("templates/footer");
    }

    public function processTugasAkhir(): void
    {
        if (!isset($_FILES['tugas_akhir']) && !isset($_FILES['program_aplikasi']) && !isset($_FILES['publikasi_jurnal'])) {
            http_response_code(400);
            echo json_encode([
                "status" => "error",
                "message" => "Data from form not complete!"
            ]);
            exit;
        }

        foreach ($_FILES as $key => &$value) {
            $value['new_name'] = uniqid() . '--' . basename($value['name']);
        }

        $is_files_successfully_inserted_to_database = false;
        try {
            BerkasTARepository::addNewBerkasTA(new BerkasTA($_SESSION['user_id'], date('Y-m-d'), $_FILES['tugas_akhir']['new_name'], $_FILES['program_aplikasi']['new_name'], $_FILES['publikasi_jurnal']['new_name']));

            $is_files_successfully_inserted_to_database = true;
        } catch (\Exception $e) {
            http_response_code(500);
            echo json_encode([
                "status" => "error",
                "message" => "Fail to store form data to database!"
            ]);
            exit;
        }

        if ($is_files_successfully_inserted_to_database) {
            $is_move_uploaded_file_success = FileManager::moveFile($_FILES, [
                "tugas_akhir" => __DIR__ . "/../../storage/uploads/tugas_akhir/laporan_ta/",
                "program_aplikasi" => __DIR__ . "/../../storage/uploads/tugas_akhir/program_aplikasi/",
                "publikasi_jurnal" => __DIR__ . "/../../storage/uploads/tugas_akhir/publikasi_jurnal/"
            ]);
        }

        if ($is_move_uploaded_file_success) {
            $_SESSION['status']['administrasi_prodi'] = "diajukan";

            http_response_code(200);
            echo json_encode([
                "status" => "success",
                "message" => "Successfully send form berkas tugas akhir to the server"
            ]);
            exit;
        } else {
            http_response_code(500);
            echo json_encode([
                "status" => "error",
                "message" => "Failed to move files in the server!"
            ]);
            exit;
        }
    }

    public function viewAdministrasiProdi(): void
    {
        try {
            $status_prodi = BerkasProdiRepository::getStatusBerkasProdi($_SESSION['user_id']);
        } catch (\Exception $e) {
            http_response_code(500);
            echo json_encode([
                "status" => "error",
                "message" => "Database connectivity error!"
            ]);
            exit;
        }

        $this->view("templates/header", [
            'title' => "Administrasi Prodi",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/mahasiswa/administrasi_prodi", [
            'active_page' => "administrasi-prodi",
            'info_berkas' => $status_prodi
        ]);
        $this->view("templates/footer");
    }

    public function processAdministrasiProdi(): void
    {
        if (!isset($_FILES['distribusi_tugas_akhir']) && !isset($_FILES['distribusi_magang']) && !isset($_FILES['bebas_kompen']) && !isset($_FILES['toeic'])) {
            http_response_code(400);
            echo json_encode([
                "status" => "error",
                "message" => "Data from form not complete!"
            ]);
            exit;
        }

        foreach ($_FILES as $key => &$value) {
            $value['new_name'] = uniqid() . '--' . basename($value['name']);
        }

        $is_files_successfully_inserted_to_database = false;
        try {
            BerkasProdiRepository::addNewBerkasProdi(new BerkasProdi($_SESSION['user_id'], date('Y-m-d'), $_FILES['distribusi_tugas_akhir']['new_name'], $_FILES['distribusi_magang']['new_name'], $_FILES['bebas_kompen']['new_name'], $_FILES['toeic']['new_name']));

            $is_files_successfully_inserted_to_database = true;
        } catch (\Exception $e) {
            http_response_code(500);
            echo json_encode([
                "status" => "error",
                "message" => "Fail to store form data to database!"
            ]);
            exit;
        }

        if ($is_files_successfully_inserted_to_database) {
            $is_move_uploaded_file_success = FileManager::moveFile($_FILES, [
                "distribusi_tugas_akhir" => __DIR__ . "/../../storage/uploads/administrasi_prodi/distribusi_tugas_akhir/",
                "distribusi_magang" => __DIR__ . "/../../storage/uploads/administrasi_prodi/distribusi_magang/",
                "bebas_kompen" => __DIR__ . "/../../storage/uploads/administrasi_prodi/bebas_kompen/",
                "toeic" => __DIR__ . "/../../storage/uploads/administrasi_prodi/toeic/"
            ]);
        }

        if ($is_move_uploaded_file_success) {
            $_SESSION['status']['tugas_akhir'] = "diajukan";

            http_response_code(200);
            echo json_encode([
                "status" => "success",
                "message" => "Successfully send form berkas tugas akhir to the server"
            ]);
            exit;
        } else {
            http_response_code(500);
            echo json_encode([
                "status" => "error",
                "message" => "Failed to move files in the server!"
            ]);
            exit;
        }
    }

    public function viewRiwayatPengajuan(): void
    {
        try {
            $user_history = BerkasRepository::getUserHistoryRequestBerkas($_SESSION['user_id']);
        } catch (\PDOException $e) {
            http_response_code(500);
            echo json_encode([
                "status" => "error",
                "message" => "Failed to retrieve user history request"
            ]);
            exit;
        }

        $this->view("templates/header", [
            'title' => "Riwayat Pengajuan",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/mahasiswa/riwayat_pengajuan", [
            'active_page' => "riwayat-pengajuan",
            'req_history' => $user_history
        ]);
        $this->view("templates/footer");
    }

    public function viewPermintaanSurat(): void
    {
        try {
            $status_bebas_tanggungan = BerkasRepository::getStatusBebasTanggungan($_SESSION['user_id']);
        } catch (\Exception $e) {
            http_response_code(500);
            echo json_encode([
                "status" => "error",
                "message" => "Database connectivity error!"
            ]);
            exit;
        }
        $this->view("templates/header", [
            'title' => "Permintaan Surat",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/mahasiswa/permintaan_surat", [
            'active_page' => "permintaan-surat",
            'info_berkas' => $status_bebas_tanggungan
        ]);
        $this->view("templates/footer");
    }
}
