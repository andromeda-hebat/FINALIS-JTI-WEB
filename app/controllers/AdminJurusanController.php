<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Repository\{AdminRepository, MahasiswaRepository};
use App\Models\Admin;

class AdminJurusanController extends Controller
{
    public function viewKelolaAdmin(): void
    {
        try {
            $admin_data = AdminRepository::getAllDataAdmin();
        } catch (\Exception $e) {
            http_response_code(500);
            echo json_encode([
                "status" => "error",
                "message" => "Database connectivity error!"
            ]);
            exit;
        }

        $this->view("templates/header", [
            'title' => "Kelola Admin",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_jurusan/kelola_admin", [
            'active_page' => 'kelola_admin',
            'admin_data' => $admin_data
        ]);
        $this->view("templates/footer");
    }

    public function addNewAdmin(): void
    {
        if (
            !empty($_POST['id_admin']) &&
            !empty($_POST['nama']) &&
            filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) &&
            !empty($_POST['jabatan']) &&
            !empty($_POST['password']) &&
            !empty($_POST['foto-profil'])
        ) {
            $id_admin = htmlspecialchars(strip_tags($_POST['id_admin']));
            $nama = htmlspecialchars(strip_tags($_POST['nama']));
            $email = htmlspecialchars(strip_tags($_POST['email']));
            $jabatan = htmlspecialchars(strip_tags($_POST['jabatan']));
            $password = htmlspecialchars(strip_tags($_POST['password']));
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
            $foto_profil = base64_encode(htmlspecialchars(strip_tags($_POST['foto-profil'])));

            $admin = new Admin;
            $admin->setUserId($id_admin);
            $admin->setNamaLengkap($nama);
            $admin->setEmail($email);
            $admin->setJabatan($jabatan);
            $admin->setPassword($hashed_password);
            $admin->setFotoProfil($foto_profil);

            try {
                AdminRepository::addNewAdmin($admin);
                http_response_code(200);
                echo json_encode([
                    "status" => "success",
                    "message" => "Successfully add new admin data!",
                ]);
                exit;
            } catch (\PDOException $e) {
                http_response_code(500);
                echo json_encode([
                    "status" => "error",
                    "message" => "Database connectivity error!",
                ]);
                exit;
            }
        }
    }

    public function viewTambahAdmin(): void
    {
        $this->view("templates/header", [
            'title' => "Tambah Admin",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_jurusan/tambah_admin");
        $this->view("templates/footer");
    }

    public function viewEditAdmin(): void
    {
        $this->view("templates/header", [
            'title' => "Edit Admin",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_jurusan/edit_admin");
        $this->view("templates/footer");
    }

    public function viewKelolaMahasiswa(): void
    {
        try {
            $mhs_data = MahasiswaRepository::getAllDataMahasiswa();
        } catch (\Exception $e) {
            http_response_code(500);
            echo json_encode([
                "status" => "error",
                "message" => "Database connectivity error!"
            ]);
            exit;
        }

        $this->view("templates/header", [
            'title' => "Kelola Mahasiswa",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_jurusan/kelola_mahasiswa", [
            'active_page' => "Kelola Mahasiswa",
            'mhs_data' => $mhs_data
        ]);
        $this->view("templates/footer");
    }

    public function viewTambahMahasiswa(): void
    {
        $this->view("templates/header", [
            'title' => "Tambah Mahasiswa",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_jurusan/tambah_mahasiswa");
        $this->view("templates/footer");
    }

    public function viewEditMahasiswa(): void
    {
        $this->view("templates/header", [
            'title' => "Edit Mahasiswa",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_jurusan/edit_mahasiswa");
        $this->view("templates/footer");
    }

    public function kelolaTemplateSurat(): void
    {
        $this->view("templates/header", [
            'title' => "Kelola Template Surat",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_jurusan/kelola_surat");
        $this->view("templates/footer");
    }

    public function tambahTemplateSurat(): void
    {
        $this->view("templates/header", [
            'title' => "Tambah Template Surat",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_jurusan/tambah_surat");
        $this->view("templates/footer");
    }

    public function catatanAktivitas(): void
    {
        $this->view("templates/header", [
            'title' => "Log Aktivitas",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_jurusan/catatan_aktivitas");
        $this->view("templates/footer");
    }
}