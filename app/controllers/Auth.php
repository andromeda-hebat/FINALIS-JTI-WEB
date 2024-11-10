<?php

require_once __DIR__ . "/../core/Controller.php";

class Auth extends Controller {

    public function __construct() {
        $this->model = null; // NOTE: change this soon!
    }

    public function login(): void {
        $this->view("pages/login");
    }

    public function logout(): void {
        $this->view("pages/logout");
    }
}