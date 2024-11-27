<?php

namespace App\Controllers;

require_once __DIR__ . '/../core/Controller.php';


use App\Core\Controller;


class AdminController extends Controller {
    public function requestVerifikasi(): void {
        $data['title'] = "Permintaan Verifikasi";
        $this->view("templates/header",$data);
        $this->view("pages/admin/permintaan_verifikasi");
        $this->view("templates/footer");
    }
}
