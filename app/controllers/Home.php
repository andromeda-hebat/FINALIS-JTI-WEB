<?php

namespace App\Controllers;

require_once __DIR__ . '/../core/Controller.php';

use App\Core\Controller;

class Home extends Controller {

    public function __construct() {
        $this->model = null;
    }

    public function index(): void {
        $this->view("index");
    }

    public function contact(): void {
        $this->view("pages/contact");
    }
}
