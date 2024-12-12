<?php

namespace App\Models;

class StatusBerkas
{
    private string $status_verifikasi;
    private string $keterangan_verifikasi;

    
    public function getStatusVerifikasi(): string { return $this->status_verifikasi; }

    public function setStatusVerifikasi(string $status_verifikasi): void { $this->status_verifikasi = $status_verifikasi; }

    public function getKeteranganVerifikasi(): string { return $this->keterangan_verifikasi; }

    public function setKeteranganVerifikasi(string $keterangan_verifikasi): void { $this->keterangan_verifikasi = $keterangan_verifikasi; }
}