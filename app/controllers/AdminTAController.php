<?php

namespace App\Controllers;

require_once __DIR__ . '/../core/Controller.php';


use App\Core\Controller;


class AdminTAController extends Controller {
    public function requestVerifikasi(): void {
        $data['title'] = "Permintaan Verifikasi";
        $data['css'] = ["assets/css/sidebar"];
        $this->view("templates/header",$data);
        $this->view("pages/admin_ta/permintaan_verifikasi");
        $this->view("templates/footer");
    }
    public function detailsRequest(): void {
        $data['title'] = "Detail Permintaan";
        $data['css'] = ["assets/css/sidebar"];
        $this->view("templates/header",$data);
        $this->view("pages/admin_ta/detail_permintaan");
        $this->view("templates/footer");
    }
}
