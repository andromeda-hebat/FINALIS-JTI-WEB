<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Repository\{BerkasProdiRepository, BerkasTARepository};

class HomeController extends Controller
{
    public function index(): void
    {
        if (isset($_SESSION['user_id'])) {
            header('Location: /dashboard');
            exit;
        }
        
        $this->view("templates/header", [
            'title' => "FINALIS JTI"
        ]);
        $this->view("pages/general/index");
        $this->view("templates/footer");
    }

    public function contact(): void
    {
        $this->view("templates/header", [
            'title' => "Kontak"
        ]);
        $this->view("pages/general/contact");
        $this->view("templates/footer");
    }

    public function dashboard(): void
    {
        $data['title'] = "Dashboard";
        $data['active_page'] = "dashboard";
        $data['css'] = ["assets/css/sidebar"];

        if (!isset($_SESSION['role'])) {
            $this->view("templates/header", [
                'title' => 'Dashboard'
            ]);
            $this->view("pages/general/not_authenticate");
            $this->view('templates/footer');
            exit;
        }

        try {
            $all_req_verif = null;
            $viewPage = null;
        
            switch ($_SESSION['role']) {
                case 'Admin Prodi':
                    $all_req_verif = BerkasProdiRepository::getAllBerkasProdiReq();
                    $viewPage = "pages/admin_prodi/dashboard";
                    break;
                case 'Admin TA':
                    $all_req_verif = BerkasTARepository::getAllBerkasTAReq();
                    $viewPage = "pages/admin_ta/dashboard";
                    break;
                case 'Admin Jurusan':
                    $viewPage = "pages/admin_jurusan/dashboard";
                    break;
                case 'mahasiswa':
                    $viewPage = "pages/mahasiswa/dashboard";
                    break;
            }
        
            if ($viewPage) {
                $this->view("templates/header", $data);
                $this->view($viewPage, isset($all_req_verif) ? [
                    'all_req_verif' => $all_req_verif,
                    'active_page' => 'dashboard'
                ] : $data);
                $this->view("templates/footer");
            }
        } catch (\PDOException $e) {
            header("Content-Type: application/json");
            http_response_code(500);
            echo json_encode([
                "status" => "error",
                "message" => "Database connectivity error!"
            ]);
        }
    }
}
