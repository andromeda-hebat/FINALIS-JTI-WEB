<?php

namespace App\Middlewares;

use App\Controllers\AuthController;

class AuthMiddleware
{

    public static function checkAuth(string $user_role): void
    {
        if (!isset($_SESSION['user_id'])) {
            (new AuthController)->sendNotAuthorizedWarning();
            exit;
        }
        
        if ($user_role == 'any') {
            if (!in_array($_SESSION['role'], ['mahasiswa', 'Admin Prodi', 'Admin TA', 'Admin Jurusan'])) {
                (new AuthController)->sendNotAuthorizedWarning();
                exit;
            }
            return;
        }

        if (strcasecmp($_SESSION['role'], $user_role) != 0) {
            (new AuthController)->sendNotAuthorizedWarning();
            exit;
        }
    }
}
