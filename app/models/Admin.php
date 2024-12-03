<?php

namespace App\Models;

class Admin extends User
{
    private string $id_admin;

    public function getIdAdmin(): string
    {
        return $this->id_admin;
    }

    public function setIdAdmin(string $id_admin): void
    {
        $this->id_admin = $id_admin;
    }
}
