<?php

namespace App\Middlewares;

use App\Helpers\ViewHelper;

class AuthMiddleware
{
    public static function checkAuth(): void
    {
        if (!isset($_SESSION['user_id'])) {
            ViewHelper::view("templates/header", [
                'title' => 'Not Authorized!'
            ]);
            ViewHelper::view("pages/general/not_authorized");
            ViewHelper::view("templates/footer");
            exit;
        }
    }
}
