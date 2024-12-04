<?php

namespace App\Controllers;

require_once __DIR__ . '/../core/Controller.php';


use App\Core\Controller;
use App\Repository\BerkasRepository;


class AdminTAController extends Controller
{
    private BerkasRepository $berkas_repository;

    public function __construct()
    {
        $this->berkas_repository = new BerkasRepository();
    }

    public function requestVerifikasi(): void
    {
        $data['title'] = "Permintaan Verifikasi";
        $data['css'] = ["assets/css/sidebar"];
        $this->view("templates/header", $data);
        $this->view("pages/admin_ta/permintaan_verifikasi");
        $this->view("templates/footer");
    }

    public function showDetailReq(int $id_verifikasi): void
    {
        try {
            $all_req_file = $this->berkas_repository->getAllBerkasTAReq();
            $user_file = $this->berkas_repository->getSingleBerkasTAReq($id_verifikasi);
        } catch (\PDOException $e) {
            http_response_code(500);
            echo json_encode([
                "status"=>"error",
                "message"=>"Database connectivity error!",
                "detail"=>$e->getMessage()
            ]);
            return;
        }


        // THIS CODE IS ONLY FOR TEMPORARY PURPOSE!!!
        foreach ($all_req_file as $key => $value) {
            if ($value->id_verifikasi == $id_verifikasi) {
                $actual_data = $value;
                break;
            }
        }

        $this->view("templates/header", [
            'title' => "Detail Permintaan",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_ta/detail_permintaan", [
            'user_file' => $actual_data
        ]);
        $this->view("templates/footer");
    }
}
