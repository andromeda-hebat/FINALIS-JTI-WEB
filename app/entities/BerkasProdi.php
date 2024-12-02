<?php

namespace App\Entities;

class BerkasProdi
{
    private string $id_berkas_prodi;
    private string $nim;
    private string $tanggal_request;
    private string $toeic;
    private string $distribusi_skripsi;
    private string $distribusi_magang;
    private string $surat_bebas_kompen;
    
    public function __set(string $name, mixed $value): void { }

}