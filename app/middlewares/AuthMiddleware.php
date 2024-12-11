<?php

namespace App\Middlewares;

use App\Controllers\AuthController;

class AuthMiddleware
{
    public static function checkAuth(string $user_role): void
    {
        if (!isset($_SESSION['user_id']) || strcasecmp($_SESSION['role'], $user_role) != 0) {
            (new AuthController)->sendNotAuthorizedWarning();
            exit;
        }
    }
}
