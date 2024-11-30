<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller {

    public function index(): void {
        $data['title'] = "FINALIS JTI";
        $this->view("templates/header", $data);
        $this->view("pages/index");
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
        $data['active_page'] = "dashboard";
        switch ($_SESSION['role']) {
            case 'Admin Prodi':
                $this->view("templates/header", $data);
                $this->view("pages/admin_prodi/dashboard", $data);
                $this->view("templates/footer");
                break;
            case 'Admin TA':
                $this->view("templates/header", $data);
                $this->view("pages/admin_ta/dashboard", $data);
                $this->view("templates/footer");
                break;
            case 'Admin Jurusan':
                $this->view("templates/header", $data);
                $this->view("pages/admin_jurusan/dashboard", $data);
                $this->view("templates/footer");
                break;
            case 'mahasiswa':
                $this->view("templates/header", $data);
                $this->view("pages/student/dashboard", $data);
                $this->view("templates/footer");
                break;
            default:
                // WARNING: Informs the user that they are not authenticated
                echo "USER NOT AUTHENTICATED!";
                break;
        }
    }
}
