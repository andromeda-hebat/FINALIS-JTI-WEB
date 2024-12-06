<?php

namespace App\Middlewares;

class AuthMiddleware
{
    public static string $checkAuth = 'checkAuth';

    public static function checkAuth(): void
    {
        if (!isset($_SESSION['user_id'])) {
            self::view("templates/header", [
                'title' => 'Not Authorized!'
            ]);
            self::view("pages/general/not_authorized");
            self::view("templates/footer");
            exit;
        }
    }

    private static function view(string $view, array $data = []): void
    {
        require __DIR__ . '/../views/' . $view . '.php';
    }
}
