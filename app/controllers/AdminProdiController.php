<?php

namespace App\Controllers;

require_once __DIR__ . '/../core/Controller.php';


use App\Core\Controller;


class AdminProdiController extends Controller {
    public function requestVerifikasi(): void {
        $this->view("templates/header",[
            'title' => "Permintaan Verifikasi",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_prodi/permintaan_verifikasi");
        $this->view("templates/footer");
    }
    
    public function showDetaillReq(): void {
        $this->view("templates/header",[
            'title' => "Detail Permintaan",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/admin_prodi/detail_permintaan");
        $this->view("templates/footer");
    }
}
