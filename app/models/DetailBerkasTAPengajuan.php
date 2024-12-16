<?php

namespace App\Models;

class DetailBerkasTAPengajuan extends BerkasPengajuan
{
    private string $foto_profil;
    private string $laporan_ta;
    private string $file_laporan_ta;
    private string $aplikasi;
    private string $file_aplikasi;
    private string $bukti_publikasi;
    private string $file_bukti_publikasi;

    
    public function getFotoProfil(): string { return $this->foto_profil; }

    public function setFotoProfil(string $foto_profil): void { $this->foto_profil = $foto_profil; }
    
    public function getLaporanTA(): string { return $this->laporan_ta; }

    public function setLaporanTA(string $laporan_ta): void { $this->laporan_ta = $laporan_ta; }

    public function getFileLaporanTA(): string { return $this->file_laporan_ta; }

    public function setFileLaporanTA(string $file_laporan_ta): void { $this->file_laporan_ta = $file_laporan_ta; }

    public function getAplikasi(): string { return $this->aplikasi; }

    public function setAplikasi(string $aplikasi): void { $this->aplikasi = $aplikasi; }

    public function getFileAplikasi(): string { return $this->file_aplikasi; }

    public function setFileAplikasi(string $file_aplikasi): void { $this->file_aplikasi = $file_aplikasi; }

    public function getBuktiPublikasi(): string { return $this->bukti_publikasi; }

    public function setBuktiPublikasi(string $bukti_publikasi): void { $this->bukti_publikasi = $bukti_publikasi; }

    public function getFileBuktiPublikasi(): string { return $this->file_bukti_publikasi; }

    public function setFileBuktiPublikasi(string $file_bukti_publikasi): void { $this->file_bukti_publikasi = $file_bukti_publikasi; }
}