<?php

namespace App\Models;

class BerkasTA extends Berkas
{
    private string $laporan_ta;
    private string $aplikasi;
    private string $bukti_publikasi;

    public function getLaporanTa(): string { return $this->laporan_ta; }

    public function setLaporanTa(string $laporan_ta): void { $this->laporan_ta = $laporan_ta; }

    public function getAplikasi(): string { return $this->aplikasi; }

    public function setAplikasi(string $aplikasi): void { $this->aplikasi = $aplikasi; }

    public function getBuktiPublikasi(): string { return $this->bukti_publikasi; }

    public function setBuktiPublikasi(string $bukti_publikasi): void { $this->bukti_publikasi = $bukti_publikasi; }
}