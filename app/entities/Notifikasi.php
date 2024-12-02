<?php

namespace App\Entities;

class Notifikasi
{
    private int $id_notifikasi;
    private string $pesan;
    private string $id_admin;
    private string $nim;
    private string $jenis_notifikasi;

    private string $status_notifikasi;
    
    public function __set(string $name, mixed $value): void { }

}