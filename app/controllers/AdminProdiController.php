<?php

namespace App\Controllers;

require_once __DIR__ . '/../core/Controller.php';


use App\Core\Controller;
use App\Core\Database;
use App\Repository\BerkasRepository;


class AdminProdiController extends Controller
{
    private BerkasRepository $berkas_repository;

    public function __construct()
    {
        $this->berkas_repository = new BerkasRepository();
    }

    public function requestVerifikasi(): void
    {
        try {
            $all_req_verif = $this->berkas_repository->getAllBerkasProdiReq();
        } catch (\PDOException $e) {
            http_response_code(500);
            echo json_encode([
                "status" => "error",
                "message" => "Database connectivity error!",
                "detail" => $e->getMessage()
            ]);
            return;
        }

        $this->view("templates/header", [
            'title' => "Permintaan Verifikasi",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_prodi/permintaan_verifikasi", [
            'all_req_verif' => $all_req_verif
        ]);
        $this->view("templates/footer");
    }

    public function showDetailReq(int $id_verifikasi): void
    {
        try {
            $all_req_file = $this->berkas_repository->getAllBerkasProdiReq();
            $user_file = $this->berkas_repository->getSingleBerkasProdiReq($id_verifikasi);
        } catch (\PDOException $e) {
            http_response_code(500);
            echo json_encode([
                "status" => "error",
                "message" => "Database connectivity error!",
                "detail" => $e->getMessage()
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
        $this->view("pages/admin_prodi/detail_permintaan", [
            'user_file' => $actual_data
        ]);
        $this->view("templates/footer");
    }
}
