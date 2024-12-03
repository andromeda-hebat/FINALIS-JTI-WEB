<?php

namespace App\Models;

class BerkasProdi extends Berkas
{
    public string $toeic;
    public string $distribusi_skripsi;
    public string $distribusi_magang;
    public string $surat_bebas_kompen;

    public function __construct(?string $nim = null, ?string $tanggal_request = null, ?string $id_berkas = null, ?string $toeic, ?string $distribusi_skripsi, ?string $distribusi_magang, ?string $surat_bebas_kompen)
    {
        parent::__construct($nim, $tanggal_request);
        $this->toeic = $toeic;
        $this->distribusi_skripsi = $distribusi_skripsi;
        $this->distribusi_magang = $distribusi_magang;
        $this->surat_bebas_kompen = $surat_bebas_kompen;
    }
}