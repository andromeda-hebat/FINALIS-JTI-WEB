<?php

namespace App\Controllers;

use App\Helpers\ViewHelper;
use App\Repository\BerkasTARepository;


class AdminTAController
{
    public function requestVerifikasi(): void
    {
        try {
            $all_req_verif = BerkasTARepository::getAllBerkasTAReq();
        } catch (\PDOException $e) {
            http_response_code(500);
            echo json_encode([
                "status" => "error",
                "message" => "Database connectivity error!",
            ]);
            exit;
        }

        ViewHelper::view("templates/header", [
            'title' => "Permintaan Verifikasi",
            'css' => ["/assets/css/sidebar"]
        ]);
        ViewHelper::view("pages/admin_ta/permintaan_verifikasi", [
            'all_req_verif' => $all_req_verif
        ]);
        ViewHelper::view("templates/footer");
    }

    public function showDetailReq(int $id_verifikasi): void
    {
        try {
            $user_file = BerkasTARepository::getSingleBerkasTAReq($id_verifikasi);
        } catch (\PDOException $e) {
            http_response_code(500);
            echo json_encode([
                "status" => "error",
                "message" => "Database connectivity error!",
            ]);
            exit;
        }

        ViewHelper::view("templates/header", [
            'title' => "Detail Permintaan",
            'css' => ["/assets/css/sidebar"]
        ]);
        ViewHelper::view("pages/admin_ta/detail_permintaan", [
            'user_file' => $user_file
        ]);
        ViewHelper::view("templates/footer");
    }

    public function verifyBerkas(int $id_verifikasi): void
    {
        $data = json_decode(file_get_contents('php://input'), true);
        
        try {
            BerkasTARepository::updateVerifyStatusBerkasTA($data['id_verifikasi'], $data['verify'], $data['description']);
            http_response_code(200);
            echo json_encode([
                "status" => "success",
                "message" => "successfully update verify status"
            ]);
        } catch (\PDOException $e) {
            http_response_code(500);
            echo json_encode([
                "status"=>"error",
                "message"=>"Database connectivity error!",
            ]);
        }
    }
}
