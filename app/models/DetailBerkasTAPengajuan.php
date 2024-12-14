<?php

namespace App\Models;

class DetailBerkasTAPengajuan extends BerkasPengajuan
{
    private string $laporan_ta;
    private string $aplikasi;
    private string $bukti_publikasi;

    
    public function getLaporanTA(): string { return $this->laporan_ta; }

    public function setLaporanTA(string $laporan_ta): void { $this->laporan_ta = $laporan_ta; }

    public function getAplikasi(): string { return $this->aplikasi; }

    public function setAplikasi(string $aplikasi): void { $this->aplikasi = $aplikasi; }

    public function getBuktiPublikasi(): string { return $this->bukti_publikasi; }

    public function setBuktiPublikasi(string $bukti_publikasi): void { $this->bukti_publikasi = $bukti_publikasi; }
}