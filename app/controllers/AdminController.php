<?php

namespace App\Controllers;

use App\Core\Controller;


class AdminController extends Controller {
    public function requestVerifikasi(): void {
        $data['title'] = "Permintaan Verifikasi";
        $this->view("templates/header",$data);
        $this->view("pages/admin/permintaan_verifikasi");
        $this->view("templates/footer");
    }
}
