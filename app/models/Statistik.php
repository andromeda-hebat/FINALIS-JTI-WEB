<?php
namespace App\Models;

use App\Core\Model;

class Statistik extends Model
{
    public string $id_verifikasi;
    public string $id_berkas;
    public string $jenis_berkas;
    public string $status_verifikasi;
    public string $tanggal_verifikasi;
    public string $keterangan_verifikasi;

}
