<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Repository\{BerkasRepository, BerkasProdiRepository, BerkasTARepository, StatistikRepository};

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

    public function viewContact(): void
    {
        $this->view("templates/header", [
            'title' => "Kontak"
        ]);
        $this->view("pages/general/contact");
        $this->view("templates/footer");
    }

    public function viewDashboard(): void
    {
        $data['title'] = "Dashboard";
        $data['active_page'] = "dashboard";
        $data['css'] = ["assets/css/sidebar"];

        try { 
            switch ($_SESSION['role']) {
                case 'Admin Prodi':
                    $statistic_request = StatistikRepository::getStatisticRequest('Prodi');
                    $all_req_verif = BerkasProdiRepository::getAllBerkasProdiReq();
                    $this->view("templates/header", $data);
                    $this->view("pages/admin_prodi/dashboard", [
                        'statistic_request' => $statistic_request,
                        'all_req_verif' => $all_req_verif,
                        'active_page' => 'dashboard'
                    ]);
                    $this->view("templates/footer");
                    break;
                case 'Admin TA':
                    $statistic_request = StatistikRepository::getStatisticRequest('TA');
                    $all_req_verif = BerkasTARepository::getAllBerkasTAReq();
                    $this->view("templates/header", $data);
                    $this->view("pages/admin_ta/dashboard", [
                        'statistic_request' => $statistic_request,
                        'all_req_verif' => $all_req_verif,
                        'active_page' => 'dashboard'
                    ]);
                    $this->view("templates/footer");;
                    break;
                case 'Admin Jurusan':
                    $users_statistic = StatistikRepository::getTotalUserStatistic();
                    $this->view("templates/header", $data);
                    $this->view("pages/admin_jurusan/dashboard", [
                        'active_page' => 'dashboard',
                        'total_user' => $users_statistic
                    ]);
                    $this->view("templates/footer");
                    break;
                case 'mahasiswa':
                    $status_ta = BerkasTARepository::getStatusBerkasTA($_SESSION['user_id']);
                    $status_prodi = BerkasProdiRepository::getStatusBerkasProdi($_SESSION['user_id']);
                    $status_bebas_tanggungan = BerkasRepository::getStatusBebasTanggungan($_SESSION['user_id']);
                    $this->view("templates/header", $data);
                    $this->view("pages/mahasiswa/dashboard", [
                        'status_ta' => ($status_ta == false) ? 'Belum diajukan' : $status_ta->getStatusVerifikasi(),
                        'status_prodi' => ($status_prodi == false) ? 'Belum diajukan' : $status_prodi->getStatusVerifikasi(),
                        'status_bebas_tanggungan' => $status_bebas_tanggungan->getStatusVerifikasi(),
                        'active_page' => 'dashboard'
                    ]);
                    $this->view("templates/footer");
                    break;
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
