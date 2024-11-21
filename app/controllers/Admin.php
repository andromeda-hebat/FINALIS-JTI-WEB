<?php

namespace App\Controllers;

require_once __DIR__ . '/../core/Controller.php';


use App\Core\Controller;


class Admin extends Controller {

    public function __construct() {
        
    }
    public function requestVerifikasi(): void {
        $data['title'] = "Permintaan Verifikasi";
        $this->view("templates/header",$data);
        $this->view("pages/admin/permintaan_verifikasi");
        $this->view("templates/footer");
    }
}
