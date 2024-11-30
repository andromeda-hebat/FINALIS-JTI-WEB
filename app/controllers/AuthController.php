<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\{User, Admin, Students};


class AuthController extends Controller
{

    private User $user;
    private Admin $admin;
    private Students $student;


    public function __construct()
    {
        $this->user = new User();
        $this->admin = new Admin();
        $this->student = new Students();
    }

    public function viewLogin(): void {
        $data['title'] = "Login";
        $this->view("templates/header", $data);
        $this->view("pages/login");
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
        session_start();
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
            $data['title'] = "Dashboard";
            $this->view("templates/header", $data);

            switch ($user['role']) {
                case 'mahasiswa':
                    $this->view("pages/student/dashboard");
                    break;
                case 'Admin TA':
                    $this->view("pages/admin_ta/dashboard");
                    break;
                case 'Admin Prodi':
                    $this->view("pages/admin_prodi/dashboard");
                    break;
                case 'Admin Jurusan':
                    $this->view("pages/admin_jurusan/dashboard");
                    break;
            }

            $this->view("templates/footer");
        } else {
            $data['message'] = "User fail to authenticate! Wrong user id or password";
            $this->view("pages/user_fail_authenticate", $data);
        }

    }

    public function logout(): void
    {
        $data['title'] = "Logout";
        $this->view("templates/header", $data);
        $this->view("pages/logout");
        $this->view("templates/footer");
    }
}