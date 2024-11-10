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

    public function dashboard(): void {
        session_start();
        switch ($_SESSION['role']) {
            case 'admin':
                $this->view("pages/admin/dashboard");
                break;
            case 'student':
                $this->view("pages/student/dashboard");
                break;
            default:
                // WARNING: Informs the user that they are not authenticated
                echo "USER NOT AUTHENTICATED!";
                break;
        }
    }
}
