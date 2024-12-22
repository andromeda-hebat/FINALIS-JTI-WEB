<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Mahasiswa;
use App\Repository\{AdminRepository, MahasiswaRepository, StatistikRepository, ApiRepository};
use App\Models\Admin;
use Dompdf\{Dompdf, Options};

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
            (
                isset($_FILES['foto_profil']) &&
                $_FILES['foto_profil']['error'] === UPLOAD_ERR_OK
            )
        ) {
            $id_admin = htmlspecialchars(strip_tags($_POST['id_admin']));
            $nama = htmlspecialchars(strip_tags($_POST['nama']));
            $email = htmlspecialchars(strip_tags($_POST['email']));
            $jabatan = htmlspecialchars(strip_tags($_POST['jabatan']));
            $password = htmlspecialchars(strip_tags($_POST['password']));
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            $allowed_img_types = ['image/jpeg', 'image/png'];
            if (
                in_array($_FILES['foto_profil']['type'], $allowed_img_types) &&
                $_FILES['foto_profil']['size'] <= 2097152
            ) {
                $file_data = file_get_contents($_FILES['foto_profil']['tmp_name']);
                $foto_profil = base64_encode($file_data);
            } else {
                http_response_code(415);
                echo json_encode([
                    "status" => "error",
                    "message" => "unsupported media type or file size exceeds limit"
                ]);
                exit;
            }

            $admin = new Admin;
            $admin->setUserId($id_admin);
            $admin->setNamaLengkap($nama);
            $admin->setEmail($email);
            $admin->setRole($jabatan);
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
        } else {
            http_response_code(400);
            echo json_encode([
                "status" => "error",
                "message" => "client send incomplete data"
            ]);
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

    public function viewEditAdmin(string $id_admin): void
    {
        try {
            $admin = AdminRepository::getSingleDataAdmin($id_admin);
        } catch (\PDOException $e) {
            http_response_code(500);
            echo json_encode([
                "status" => "error",
                "message" => "Database connectivity error!",
            ]);
            exit;
        }

        $this->view("templates/header", [
            'title' => "Edit Admin",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_jurusan/edit_admin", [
            'admin_data' => $admin
        ]);
        $this->view("templates/footer");
    }

    public function editAdminData(): void
    {
        $client_data = json_decode(file_get_contents('php://input'), true);

        if (
            !empty($client_data['id_admin']) &&
            isset($client_data['nama']) &&
            isset($client_data['email']) &&
            isset($client_data['jabatan']) &&
            isset($client_data['password']) &&
            isset($client_data['foto_profil'])
        ) {
            $admin = new Admin;
            $admin->setUserId($client_data['id_admin']);
            $admin->setNamaLengkap($client_data['nama']);
            $admin->setEmail($client_data['email']);
            $admin->setRole($client_data['jabatan']);
            $admin->setFotoProfil($client_data['foto_profil']);

            try {
                if (!empty($client_data['password'])) {
                    $hashed_password = password_hash($client_data['password'], PASSWORD_BCRYPT);
                    $admin->setPassword($hashed_password);
                    AdminRepository::updateAllFieldDataAdmin($admin);
                } else {
                    AdminRepository::updateDataAdminWithoutPassword($admin);
                }

                http_response_code(200);
                echo json_encode([
                    "status" => "success",
                    "message" => "Successfully to update admin data!",
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

    public function deleteAdminData(string $id_admin): void
    {
        try {
            AdminRepository::deleteAdminByID($id_admin);
            http_response_code(200);
            echo json_encode([
                "status" => "success",
                "message" => "Successfully to delete admin data!",
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

    public function addNewMahasiswa(): void
    {
        if (
            !empty($_POST['nim']) &&
            !empty($_POST['nama']) &&
            !empty($_POST['jurusan']) &&
            !empty($_POST['prodi']) &&
            filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) &&
            !empty($_POST['password']) &&
            !empty($_POST['tahun_masuk']) &&
            (
                isset($_FILES['foto_profil']) &&
                $_FILES['foto_profil']['error'] === UPLOAD_ERR_OK
            )
        ) {
            $nim = htmlspecialchars(strip_tags($_POST['nim']));
            $nama = htmlspecialchars(strip_tags($_POST['nama']));
            $jurusan = htmlspecialchars(strip_tags($_POST['jurusan']));
            $prodi = htmlspecialchars(strip_tags($_POST['prodi']));
            $email = htmlspecialchars(strip_tags($_POST['email']));
            $tahun_masuk = htmlspecialchars(strip_tags($_POST['tahun_masuk']));
            $password = htmlspecialchars(strip_tags($_POST['password']));
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
            
            $allowed_img_types = ['image/jpeg', 'image/png'];
            if (
                in_array($_FILES['foto_profil']['type'], $allowed_img_types) &&
                $_FILES['foto_profil']['size'] <= 2097152
            ) {
                $file_data = file_get_contents($_FILES['foto_profil']['tmp_name']);
                $foto_profil = base64_encode($file_data);
            } else {
                http_response_code(415);
                echo json_encode([
                    "status" => "error",
                    "message" => "unsupported media type or file size exceeds limit"
                ]);
                exit;
            }

            $mahasiswa = new Mahasiswa;
            $mahasiswa->setUserId($nim);
            $mahasiswa->setNamaLengkap($nama);
            $mahasiswa->setJurusan($jurusan);
            $mahasiswa->setProdi($prodi);
            $mahasiswa->setTahunMasuk($tahun_masuk);
            $mahasiswa->setEmail($email);
            $mahasiswa->setPassword($hashed_password);
            $mahasiswa->setFotoProfil($foto_profil);

            try {
                MahasiswaRepository::addNewMahasiswa($mahasiswa);
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

    public function viewEditMahasiswa(string $nim): void
    {
        try {
            $mahasiswa = MahasiswaRepository::getSingleDataMahasiswa($nim);
        } catch (\PDOException $e) {
            http_response_code(500);
            echo json_encode([
                "status" => "error",
                "message" => "Database connectivity error!",
            ]);
            exit;
        }

        $this->view("templates/header", [
            'title' => "Edit Mahasiswa",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_jurusan/edit_mahasiswa", [
            'mhs_data' => $mahasiswa
        ]);
        $this->view("templates/footer");
    }

    public function editMahasiswaData(): void
    {
        $client_data = json_decode(file_get_contents('php://input'), true);

        if (
            !empty($client_data['nim']) &&
            isset($client_data['nama']) &&
            isset($client_data['jurusan']) &&
            isset($client_data['prodi']) &&
            isset($client_data['email']) &&
            isset($client_data['tahun_masuk']) &&
            isset($client_data['foto_profil'])
        ) {
            $mahasiswa = new Mahasiswa;
            $mahasiswa->setUserId($client_data['nim']);
            $mahasiswa->setNamaLengkap($client_data['nama']);
            $mahasiswa->setJurusan($client_data['jurusan']);
            $mahasiswa->setProdi($client_data['prodi']);
            $mahasiswa->setEmail($client_data['email']);
            $mahasiswa->setTahunMasuk($client_data['tahun_masuk']);
            $mahasiswa->setFotoProfil($client_data['foto_profil']);

            try {
                if (!empty($client_data['password'])) {
                    $hashed_password = password_hash($client_data['password'], PASSWORD_BCRYPT);
                    $mahasiswa->setPassword($hashed_password);
                    MahasiswaRepository::updateAllFieldDataMahasiswa($mahasiswa);
                } else {
                    MahasiswaRepository::updateDataMahasiswaWithoutPassword($mahasiswa);
                }

                http_response_code(200);
                echo json_encode([
                    "status" => "success",
                    "message" => "Successfully to update admin data!",
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

    public function deleteMahasiswaData(string $nim): void
    {
        try {
            MahasiswaRepository::deleteMahasiswaByID($nim);
            http_response_code(200);
            echo json_encode([
                "status" => "success",
                "message" => "Successfully to delete mahasiswa data!",
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

    public function viewLaporan(): void
    {
        $this->view("templates/header", [
            'title' => "Laporan",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_jurusan/laporan", [
            'active_page' => 'laporan'
        ]);
        $this->view("templates/footer");
    }

    public function viewLaporanUmum(string $api_key = null): void
    {
        if ($api_key != null) {
            $result = ApiRepository::validateApiKey($api_key);
            if (!$result) {
                http_response_code(403);
                $this->view("templates/header", [
                    'title' => 'Not Authorized!'
                ]);
                $this->view("pages/general/not_authorized");
                $this->view("templates/footer");
                exit;
            }
        }

        $d4_ti = StatistikRepository::getTotalPaidOffAndUnpaidStudent("D4 Teknik Informatika");
        $d4_sib = StatistikRepository::getTotalPaidOffAndUnpaidStudent("D4 Sistem Informasi Bisnis");
        $d2_ppls = StatistikRepository::getTotalPaidOffAndUnpaidStudent("D2 Pengembangan Perangkat Lunak Situs");

        ob_start();
        $this->view("templates/summary_report", [
            'd4_ti' => $d4_ti,
            'd4_sib' => $d4_sib,
            'd2_ppls' => $d2_ppls
        ]);
        $document = ob_get_clean();

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $options->set('isRemoteEnabled', true);

        $pdf = new Dompdf($options);

        $pdf->loadHtml($document);
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();
        $pdf->stream("report.pdf", array("Attachment" => 0));
    }
}