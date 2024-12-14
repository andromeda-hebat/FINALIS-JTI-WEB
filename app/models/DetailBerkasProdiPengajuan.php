<?php

namespace App\Models;

class DetailBerkasProdiPengajuan extends BerkasPengajuan
{
    private string $distribusi_magang;
    private string $distribusi_skripsi;
    private string $surat_bebas_kompen;
    private string $toeic;


    public function getDistribusiMagang(): string { return $this->distribusi_magang; }

    public function setDistribusiMagang(string $distribusi_magang): void { $this->distribusi_magang = $distribusi_magang; }

    public function getDistribusiSkripsi(): string { return $this->distribusi_skripsi; }

    public function setDistribusiSkripsi(string $distribusi_skripsi): void { $this->distribusi_skripsi = $distribusi_skripsi; }

    public function getSuratBebasKompen(): string { return $this->surat_bebas_kompen; }

    public function setSuratBebasKompen(string $surat_bebas_kompen): void { $this->surat_bebas_kompen = $surat_bebas_kompen; }

    public function getToeic(): string { return $this->toeic; }

    public function setToeic(string $toeic): void { $this->toeic = $toeic; }
}
