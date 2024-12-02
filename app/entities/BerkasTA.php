<?php

namespace App\Entities;

class BerkasTA
{
    private string $id_ta;
    private string $nim;
    private string $tanggal_request;
    private string $laporan_TA;
    private string $aplikasi;

    private string $bukti_publikasi;
    
    public function __set(string $name, mixed $value): void { }

}