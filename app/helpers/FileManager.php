<?php

namespace App\Helpers;

class FileManager
{
    public static function moveFile(array $files, array $upload_dir): bool
    {
        foreach ($upload_dir as $key => $path) {
            if (!is_dir($path)) {
                mkdir($path, 0755, true);
            }
        }

        $is_move_uploaded_file_success = true;
        foreach ($files as $key => $value) {
            $file_path = $upload_dir[$key] . $value['new_name'];

            if (!move_uploaded_file($value['tmp_name'], $file_path)) {
                $is_move_uploaded_file_success = false;
            }
        }

        if ($is_move_uploaded_file_success) {
            return true;
        } else {
            return false;
        }
    }
}