<?php

namespace App\Controllers;

use App\Helpers\{FileManager, ViewHelper};
use App\Models\{BerkasProdi, BerkasTA};
use App\Repository\{BerkasRepository, BerkasProdiRepository, BerkasTARepository};

class MahasiswaController
{
    public function tugasAkhir(): void
    {
        ViewHelper::view("templates/header", [
            'title' => "Tugas Akhir",
            'css' => ["assets/css/sidebar"]
        ]);
        ViewHelper::view("pages/mahasiswa/tugas_akhir", [
            'active_page' => "tugas_akhir"
        ]);
        ViewHelper::view("templates/footer");
    }

    public function processTugasAkhir(): void
    {
        if (!isset($_FILES['tugas_akhir']) && !isset($_FILES['program_aplikasi']) && !isset($_FILES['publikasi_jurnal'])) {
            http_response_code(400);
            echo json_encode([
                "status" => "error",
                "message" => "Data from form not complete!"
            ]);
            return;
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
            return;
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
            return;
        } else {
            http_response_code(500);
            echo json_encode([
                "status" => "error",
                "message" => "Failed to move files in the server!"
            ]);
            return;
        }
    }

    public function administrasiProdi(): void
    {
        ViewHelper::view("templates/header", [
            'title' => "Administrasi Prodi",
            'css' => ["assets/css/sidebar"]
        ]);
        ViewHelper::view("pages/mahasiswa/administrasi_prodi", [
            'active_page' => "administrasi_prodi"
        ]);
        ViewHelper::view("templates/footer");
    }

    public function processAdministrasiProdi(): void
    {
        if (!isset($_FILES['distribusi_tugas_akhir']) && !isset($_FILES['distribusi_magang']) && !isset($_FILES['bebas_kompen']) && !isset($_FILES['toeic'])) {
            http_response_code(400);
            echo json_encode([
                "status" => "error",
                "message" => "Data from form not complete!"
            ]);
            return;
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
            return;
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
            return;
        } else {
            http_response_code(500);
            echo json_encode([
                "status" => "error",
                "message" => "Failed to move files in the server!"
            ]);
            return;
        }
    }

    public function riwayatPengajuan(): void
    {
        ViewHelper::view("templates/header", [
            'title' => "Riwayat Pengajuan",
            'css' => ["assets/css/sidebar"]
        ]);

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

        ViewHelper::view("pages/mahasiswa/riwayat_pengajuan", [
            'active_page' => "riwayat_pengajuan",
            'req_history' => $user_history
        ]);
        ViewHelper::view("templates/footer");
    }

    public function permintaanSurat(): void
    {
        ViewHelper::view("templates/header", [
            'title' => "Permintaan Surat",
            'css' => ["assets/css/sidebar"]
        ]);
        ViewHelper::view("pages/mahasiswa/permintaan_surat", [
            'active_page' => "permintaan_surat",
        ]);
        ViewHelper::view("templates/footer");
    }
}
