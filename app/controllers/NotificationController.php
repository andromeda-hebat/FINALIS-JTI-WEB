<?php

namespace App\Controllers;

use App\Core\Controller;


class NotificationController extends Controller
{
    public function notif(): void
    {
        $this->view("templates/header",  [
            'title' => "Notifikasi",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/general/notification");
        $this->view("templates/footer");
    }

}
