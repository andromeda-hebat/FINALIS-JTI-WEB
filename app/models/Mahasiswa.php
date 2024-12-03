<?php

namespace App\Models;

class Mahasiswa extends User
{
    private string $nim;

    public function getNim(): string
    {
        return $this->nim;
    }

    public function setNim($nim): void
    {
        $this->nim = $nim;
    }
}
