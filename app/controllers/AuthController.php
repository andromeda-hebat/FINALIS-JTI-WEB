<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\{User, Admin, Mahasiswa, Berkas};


class AuthController extends Controller
{

    private User $user;
    private Admin $admin;
    private Mahasiswa $mahasiswa;
    private Berkas $berkas;


    public function __construct()
    {
        $this->user = new User();
        $this->admin = new Admin();
        $this->mahasiswa = new Mahasiswa();
        $this->berkas = new Berkas();
    }

    public function viewLogin(): void
    {
        $data['title'] = "Login";
        $this->view("templates/header", $data);
        $this->view("pages/general/login");
        $this->view("templates/footer");
    }

    public function adminLogin(): void
    {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
        } else {
            http_response_code(400);
            echo "Data formulir login tidak lengkap!";
            return;
        }

        $result = $this->admin->checkUserIsAvailable($username, $password);

        header("Content-Type: application/json");
        if ($result === false) {
            http_response_code(404);
            echo json_encode([
                "status" => "failed",
                "message" => "User not found"
            ]);
        } else {
            http_response_code(200);
            echo json_encode([
                "status" => "success",
                "message" => "User successfully found",
                "data" => $result
            ]);
        }
    }

    public function login(): void
    {
        if (!isset($_POST["user_id"]) || !isset($_POST['password'])) {
            $data['title'] = "Login";
            $data['message'] = "User fail to authenticate!";
            $this->view("templates/header", $data);
            $this->view("pages/user_fail_authenticate", $data);
            $this->view("templates/footer");
            return;
        }

        $user = $this->user->getUserDataByUserIDAndPassword($_POST['user_id'], $_POST['password']);

        if ($user != false) {
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['full_name'] = $user['nama_lengkap'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['user_photo'] = '';

            if ($_SESSION['role'] == "mahasiswa") {
                $_SESSION['status']['tugas_akhir'] = $this->berkas->checkUserBerkasTAStatus($_SESSION['user_id']);
                $_SESSION['status']['administrasi_prodi'] = $this->berkas->checkUserBerkasProdiStatus($_SESSION['user_id']);
            }
            header('Content-Type: application/json');
            echo json_encode(['redirect' => '/dashboard']);
        } else {
            http_response_code(401);
            echo json_encode([
                "status" => "error",
                "message" => "Authentication failed. Please check your credentials.",
            ]);
        }

    }

    public function logout(): void
    {
        session_unset();
        session_destroy();
        header('Location: /');
    }
}