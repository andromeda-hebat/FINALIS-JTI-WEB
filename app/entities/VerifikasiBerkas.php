<?php

namespace App\Entities;

class VerifikasiBerkas
{
    private int $id_verifikasi;
    private string $id_berkas;
    private string $jenis_berkas;
    private string $id_admin;
    private string $status_verifikasi;
    private string $tanggal_verifikasi;
    private string $keterangan_verifikasi;
    
    public function __set(string $name, mixed $value): void { }

}