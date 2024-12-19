<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Repository\NotifikasiRepository;

class NotifikasiController extends Controller
{
    public function viewNotification(): void
    {
        try {
            switch ($_SESSION['role']) {
                case 'mahasiswa':
                    $notifications = NotifikasiRepository::getMahasiswaNotificationByUserID($_SESSION['user_id']);
                    break;
                case 'Admin TA':
                    $notifications = NotifikasiRepository::getAdminTANotificationByUserID($_SESSION['user_id']);
                    break;
                case 'Admin Prodi':
                    $notifications = NotifikasiRepository::getAdminProdiNotificationByUserID($_SESSION['user_id']);
                    break;
                }
                
        } catch (\PDOException $e) {
            http_response_code(500);
            echo json_encode([
                "status" => "error",
                "message" => "Database connectivity error!"
            ]);
            exit;
        }

        $this->view("templates/header",  [
            'title' => "Notifikasi",
            'css' => ["assets/css/sidebar"]
        ]);
        $this->view("pages/general/notifikasi", [
            'notifications' => $notifications
        ]);
        $this->view("templates/footer");
    }

}
