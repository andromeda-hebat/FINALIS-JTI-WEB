<?php

namespace App\Models;

class BerkasProdi extends Berkas
{
    public ?string $id_berkas_prodi = null;
    public string $toeic;
    public string $distribusi_skripsi;
    public string $distribusi_magang;
    public string $surat_bebas_kompen;

    public function __construct(string $nim, string $tanggal_request, string $toeic, string $distribusi_skripsi, string $distribusi_magang, string $surat_bebas_kompen, ?string $id_berkas_prodi = null)
    {
        parent::__construct($nim, $tanggal_request);
        $this->toeic = $toeic;
        $this->distribusi_skripsi = $distribusi_skripsi;
        $this->distribusi_magang = $distribusi_magang;
        $this->surat_bebas_kompen = $surat_bebas_kompen;
        $this->id_berkas_prodi = $id_berkas_prodi ?? $this->id_berkas_prodi;
    }
}