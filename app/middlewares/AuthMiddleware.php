<?php

namespace App\Middlewares;

use App\Helpers\ViewHelper;

class AuthMiddleware
{
    public static function checkAuth(string $user_role): void
    {
        if (!isset($_SESSION['user_id']) || strcasecmp($_SESSION['role'], $user_role) != 0) {
            ViewHelper::view("templates/header", [
                'title' => 'Not Authorized!'
            ]);
            ViewHelper::view("pages/general/not_authorized");
            ViewHelper::view("templates/footer");
            exit;
        }
    }
}
