<?php

namespace App\Controllers;

require_once __DIR__ . '/../core/Controller.php';


use App\Core\Controller;


class AdminProdiController extends Controller {
    public function requestVerifikasi(): void {
        $data['title'] = "Permintaan Verifikasi";
        $data['css'] = ["assets/css/sidebar"];
        $this->view("templates/header",$data);
        $this->view("pages/admin_prodi/permintaan_verifikasi");
        $this->view("templates/footer");
    }
    public function detailsRequest(): void {
        $data['title'] = "Detail Permintaan";
        $data['css'] = ["assets/css/sidebar"];
        $this->view("templates/header",$data);
        $this->view("pages/admin_prodi/detail_permintaan");
        $this->view("templates/footer");
    }
}
