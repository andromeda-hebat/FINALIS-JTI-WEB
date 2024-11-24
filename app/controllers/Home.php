<?php

namespace App\Controllers;

require_once __DIR__ . '/../core/Controller.php';

use App\Core\Controller;

class Home extends Controller {

    public function index(): void {
        $data['title'] = "FINALIS JTI";
        $this->view("templates/header", $data);
        $this->view("index");
        $this->view("templates/footer");
    }

    public function contact(): void {
        $data['title'] = "Kontak";
        $this->view("templates/header", $data);
        $this->view("pages/contact");
        $this->view("templates/footer");
    }

    public function dashboard(): void {
        session_start();
        $data['title'] = "Dashboard";
        switch ($_SESSION['role']) {
            case 'admin':
                $this->view("templates/header", $data);
                $this->view("pages/admin/dashboard");
                $this->view("templates/footer");
                break;
            case 'student':
                $this->view("templates/header", $data);
                $this->view("pages/student/dashboard");
                $this->view("templates/footer");
                break;
            default:
                // WARNING: Informs the user that they are not authenticated
                echo "USER NOT AUTHENTICATED!";
                break;
        }
    }
}
