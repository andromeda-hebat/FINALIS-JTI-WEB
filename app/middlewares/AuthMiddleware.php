<?php

namespace App\Middlewares;

class AuthMiddleware
{
    public static string $checkAuth = 'checkAuth';

    public static function checkAuth(): void
    {
        if (!isset($_SESSION['user_id'])) {
            include __DIR__ . '/../views/pages/general/not_authorized.php';
            exit;
        }
    }
}
