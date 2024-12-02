<?php

namespace App\Entities;

class BerkasTanggungan
{
    private int $id_tanggungan;
    private string $nim;
    private string $jenis_tanggungan;
    private string $status_tanggungan;
    
    public function __set(string $name, mixed $value): void { }

}