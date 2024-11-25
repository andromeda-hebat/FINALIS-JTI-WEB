<?php

namespace App\Controllers;

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Admin.php';

use App\Core\Controller;
use App\Models\Admin;


class AuthController extends Controller {

    private Admin $admin;

    public function __construct() {
        $this->admin = new Admin();
    }

    public function viewLogin(): void {
        $data['title'] = "Login";
        $this->view("templates/header", $data);
        $this->view("pages/login");
        $this->view("templates/footer");
    }

    public function loginProcess(): void {
        /**
         * ======================================================
         * NOTE: THIS IS ONLY FOR TEMPORARY PURPOSES
         * DON'T KEEP THIS CODE IN FUTURE DEVELOPMENT
         * 
         * REPLACE THIS WITH DATABASE INTEGRATION
         * AND MAKE IT SECURE!
         * ======================================================
         */
        if (isset($_POST["user_id"]) && isset($_POST['password'])) {
            $user_id = $_POST['user_id'];
            $password = $_POST['password'];
        } else {
            // WARNING: A warning to user if they do not send user ID and password
            // Stop the login process
            echo "USER ID AND PASSSWORD NOT FOUND!";
            return;
        }

        session_start();
        if ($user_id == "mahasiswa" && $password == "123") {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['role'] = 'student';
            header('Location: /dashboard');
        } else if ($user_id == "admin" && $password == "admin123") {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['role'] = 'admin';
            header('Location: /dashboard');
        } else {
            // WARNING: A warning to user if they send wrong user ID and password
            echo "WRONG USER ID AND PASSWORD";
        }
    }

    public function adminLogin(): void {
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
                "status"=>"failed",
                "message"=>"User not found"
            ]);
        } else {
            http_response_code(200);
            echo json_encode([
                "status"=>"success",
                "message"=>"User successfully found",
                "data"=>$result
            ]);
        }
    }

    public function logout(): void {
        $data['title'] = "Logout";
        $this->view("templates/header", $data);
        $this->view("pages/logout");
        $this->view("templates/footer");
    }
}