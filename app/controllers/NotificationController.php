<?php

namespace App\Controllers;

use App\Helpers\ViewHelper;

class NotificationController
{
    public function notif(): void
    {
        ViewHelper::view("templates/header",  [
            'title' => "Notifikasi",
            'css' => ["assets/css/sidebar"]
        ]);
        ViewHelper::view("pages/general/notification");
        ViewHelper::view("templates/footer");
    }

}
