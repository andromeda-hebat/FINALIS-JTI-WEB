<?php

namespace App\Models;

use App\Core\Model;

class BerkasPengajuan extends Model
{
    protected ?int $nomor = null;
    protected int $id_verifikasi;
    protected string $id_berkas;
    protected string $status_verifikasi;
    protected string $nim;
    protected string $nama_lengkap;
    protected string $tanggal_request;
    protected string $keterangan_verifikasi;


    public function getNomor(): int { return $this->nomor; }

    public function setNomor(int $nomor): void { $this->nomor = $nomor; }

    public function getIdVerifikasi(): int { return $this->id_verifikasi; }

    public function setIdVerifikasi(int $id_verifikasi): void { $this->id_verifikasi = $id_verifikasi; }

    public function getIdBerkas(): string { return $this->id_berkas; }

    public function setIdBerkas(string $id_berkas): void { $this->id_berkas = $id_berkas; }

    public function getStatusVerifikasi(): string { return $this->status_verifikasi; }

    public function setStatusVerifikasi(string $status_verifikasi): void { $this->status_verifikasi = $status_verifikasi; }

    public function getNim(): string { return $this->nim; }

    public function setNim(string $nim): void { $this->nim = $nim; }

    public function getNamaLengkap(): string { return $this->nama_lengkap; }

    public function setNamaLengkap(string $nama_lengkap): void { $this->nama_lengkap = $nama_lengkap; }

    public function getTanggalRequest(): string { return $this->tanggal_request; }

    public function setTanggalRequest(string $tanggal_request): void { $this->tanggal_request = $tanggal_request; }

    public function getKeteranganVerifikasi(): string { return $this->keterangan_verifikasi; }

    public function setKeteranganVerifikasi(string $keterangan_verifikasi): void { $this->keterangan_verifikasi = $keterangan_verifikasi; }
}
