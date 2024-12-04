<?php

namespace App\Controllers;

require_once __DIR__ . '/../core/Controller.php';


use App\Core\Controller;
use App\Repository\BerkasRepository;


class AdminProdiController extends Controller {
    public function requestVerifikasi(): void {
        $this->view("templates/header",[
            'title' => "Permintaan Verifikasi",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_prodi/permintaan_verifikasi");
        $this->view("templates/footer");
    }
    
    public function showDetailReq(int $id_verifikasi): void 
    {
        try {
            $user_file = (new BerkasRepository)->getSingleBerkasProdiReq($id_verifikasi);
        } catch (\PDOException $e) {
            http_response_code(500);
            echo json_encode([
                "status"=>"error",
                "message"=>"Database connectivity error!",
                "detail"=>$e->getMessage()
            ]);
            return;
        }


        $this->view("templates/header",[
            'title' => "Detail Permintaan",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_prodi/detail_permintaan", [
            'user_file' => $user_file
        ]);
        $this->view("templates/footer");
    }
}
