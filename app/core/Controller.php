<?php

namespace App\Core;

abstract class Controller
{

    public function view(string $view, array $data = []): void
    {
        require __DIR__ . '/../views/' . $view . '.php';
    }
}
