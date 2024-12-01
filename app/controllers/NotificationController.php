<?php

namespace App\Controllers;

require_once __DIR__ . '/../core/Controller.php';


use App\Core\Controller;


class NotificationController extends Controller {
    public function notif(): void {
        $data['title'] = "Notifikasi";
        $data['css'] = ["assets/css/sidebar"];
        $this->view("templates/header",$data);
        $this->view("pages/notification");
        $this->view("templates/footer");
    }

}
