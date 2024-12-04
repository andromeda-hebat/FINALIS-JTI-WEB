<?php

namespace App\Models;

use App\Core\Model;

class VerifikasiBerkas extends Model
{
    public int $id_verifikasi;
    public string $id_berkas;
    public string $status_verifikasi;
    public string $nim;
    public string $nama_lengkap;
    public string $tanggal_request;
    public string $keterangan_verifikasi;
}