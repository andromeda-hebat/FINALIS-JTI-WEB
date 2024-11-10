<?php

namespace App\Controllers;

require_once __DIR__ . '/../core/Controller.php';

use App\Core\Controller;


class Auth extends Controller {

    public function __construct() {
        $this->model = null; // NOTE: change this soon!
    }

    public function viewLogin(): void {
        $this->view("pages/login");
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

    public function logout(): void {
        $this->view("pages/logout");
    }
}