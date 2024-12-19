<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Repository\BerkasProdiRepository;


class AdminProdiController extends Controller
{
    public function viewRequestVerifikasi(): void
    {
        try {
            $all_req_verif = BerkasProdiRepository::getAllBerkasProdiReq();
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
            'css' => ["/assets/css/sidebar"]
        ]);
        $this->view("pages/admin_prodi/permintaan_verifikasi", [
            'all_req_verif' => $all_req_verif,
            'active_page' => 'permintaan-verifikasi-prodi'
        ]);
        $this->view("templates/footer");
    }

    public function viewDetailRequest(int $id_verifikasi): void
    {
        try {
            $user_file = BerkasProdiRepository::getSingleBerkasProdiReq($id_verifikasi);
        } catch (\PDOException $e) {
            http_response_code(500);
            echo json_encode([
                "status" => "error",
                "message" => "Database connectivity error!",
                "detail" => $e->getMessage()
            ]);
            exit;
        }

        $this->view("templates/header", [
            'title' => "Detail Permintaan",
            'css' => ["/assets/css/sidebar"]
        ]);
        $this->view("pages/admin_prodi/detail_permintaan", [
            'active_page' => "permintaan-verifikasi-prodi",
            'user_file' => $user_file
        ]);
        $this->view("templates/footer");
    }

    public function verifyBerkas(int $id_verifikasi): void
    {
        $data = json_decode(file_get_contents('php://input'), true);
        
        $verify_status = ($data['is_verify'] == "true") ? 'Disetujui' : 'Ditolak';
        try {
            BerkasProdiRepository::updateVerifyStatusBerkasProdi($data['id_berkas'], $verify_status, $data['description'], $_SESSION['user_id']);
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
