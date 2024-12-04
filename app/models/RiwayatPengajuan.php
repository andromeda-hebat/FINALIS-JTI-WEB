<?php

namespace App\Models;

class RiwayatPengajuan
{
    private string $tanggal_request;
    private string $status_verifikasi;
    private string $jenis_berkas;
    private string $keterangan_verifikasi;

    public function __construct(?string $tanggal_request = null, ?string $jenis_berkas = null, ?string $status_verifikasi = null, ?string $keterangan_verifikasi = null)
    {
        $this->tanggal_request = $tanggal_request;
        $this->jenis_berkas = $jenis_berkas;
        $this->status_verifikasi = $status_verifikasi;
        $this->keterangan_verifikasi = $keterangan_verifikasi;
    }

    public function getTanggalRequest(): string
    {
        return $this->tanggal_request;
    }

    public function setTanggalRequest(string $tanggal_request): void
    {
        $this->tanggal_request = $tanggal_request;
    }

    public function getStatusVerifikasi(): string
    {
        return $this->status_verifikasi;
    }

    public function setStatusVerifikasi(string $status_verifikasi): void
    {
        $this->status_verifikasi = $status_verifikasi;
    }

    public function getJenisBerkas(): string
    {
        return $this->jenis_berkas;
    }

    public function setJenisBerkas(string $jenis_berkas): void
    {
        $this->jenis_berkas = $jenis_berkas;
    }

    public function getKeteranganVerifikasi(): string
    {
        return $this->keterangan_verifikasi;
    }

    public function setKeteranganVerifikasi(string $keterangan_verifikasi): void
    {
        $this->keterangan_verifikasi = $keterangan_verifikasi;
    }
}
