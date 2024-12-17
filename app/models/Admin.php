<?php

namespace App\Models;

class Admin extends User
{
    private int $nomor;
    private string $email;


    public function getNomor(): int { return $this->nomor; }

    public function setNomor(int $nomor): void { $this->nomor = $nomor; }

    public function getEmail(): string { return $this->email; }

    public function setEmail(string $email): void { $this->email = $email; }
}
