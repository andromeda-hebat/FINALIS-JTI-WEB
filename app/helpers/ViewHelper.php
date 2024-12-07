<?php

namespace App\Helpers;

class ViewHelper
{
    public static function view(string $view, array $data = []): void
    {
        require __DIR__ . '/../views/' . $view . '.php';
    }
}