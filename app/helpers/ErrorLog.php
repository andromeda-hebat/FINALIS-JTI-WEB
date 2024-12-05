<?php

namespace App\Helpers;

class ErrorLog
{
    public static function formattedErrorLog(string $message): string
    {
        return date('Y-m-d H:i:s T') . ' -- ' . $message . PHP_EOL;
    }
}