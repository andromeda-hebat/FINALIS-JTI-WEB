<?php

namespace App\Middlewares;

use App\Controllers\AuthController;
use App\Repository\ApiRepository;

class AuthMiddleware
{

    public static function checkAuth(string $user_role): void
    {
        switch ($user_role) {
            case 'any':
                if (isset($_SESSION['user_id'])) {
                    if (!in_array($_SESSION['role'], ['mahasiswa', 'Admin Prodi', 'Admin TA', 'Admin Jurusan'])) {
                        (new AuthController)->sendNotAuthorizedWarning();
                        exit;
                    }
                } else {
                    (new AuthController)->sendNotAuthorizedWarning();
                    exit;
                }
                return;
            case 'admin prodi':
            case 'admin ta':
            case 'admin jurusan':
                if (isset($_SESSION['user_id'])) {
                    if (strcasecmp($_SESSION['role'], $user_role) != 0) {
                        (new AuthController)->sendNotAuthorizedWarning();
                        exit;
                    }
                } else {
                    (new AuthController)->sendNotAuthorizedWarning();
                    exit;
                }
                return;
            case 'desktop':
                // $headers = getallheaders();
                // $api_key = isset($headers['Authorization']) ? trim(str_replace('Bearer ', '', $headers['Authorization'])) : null;
                // if ($api_key != null) {
                //     if (!ApiRepository::validateApiKey($api_key)) {
                //         (new AuthController)->sendNotAuthorizedWarning();
                //         exit;
                //     }
                // } else {
                //     (new AuthController)->sendNotAuthorizedWarning();
                //     exit;
                // }
                return;
        }

        
    }
}
