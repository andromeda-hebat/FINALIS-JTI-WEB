<?php

namespace App\Models;

use App\Core\Model;

class VerifikasiBerkas extends Model
{
    private ?int $nomor = null;
    private int $id_verifikasi;
    private string $id_berkas;
    private string $status_verifikasi;
    private string $nim;
    private string $nama_lengkap;
    private string $tanggal_request;
    private string $keterangan_verifikasi;


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