<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Repository\BerkasRepository;

class HomeController extends Controller
{

    public function index(): void
    {
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
            return;
        }

        switch ($_SESSION['role']) {
            case 'Admin Prodi':
                $data['all_req_verif'] = (new BerkasRepository())->getAllBerkasProdiReq();
                $this->view("templates/header", $data);
                $this->view("pages/admin_prodi/dashboard", $data);
                $this->view("templates/footer");
                break;
            case 'Admin TA':
                $data['all_req_verif'] = (new BerkasRepository())->getAllBerkasTAReq();
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
                $this->view("pages/mahasiswa/dashboard", $data);
                $this->view("templates/footer");
                break;
        }
    }
}
