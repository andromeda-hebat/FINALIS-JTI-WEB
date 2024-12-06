<?php

namespace App\Models;

use App\Core\Model;

class RiwayatPengajuan extends Model
{
    private ?int $nomor;
    private ?string $tanggal_request;
    private ?string $jenis_formulir;
    private ?string $status;
    private ?string $keterangan;

    public function __construct() { }

    public function getNomor(): int { return $this->nomor; }

    public function setNomor(int $nomor): void { $this->nomor = $nomor; }

    public function getTanggalRequest(): string { return $this->tanggal_request; }

    public function setTanggalRequest(string $tanggal_request): void { $this->tanggal_request = $tanggal_request; }

    public function getStatus(): string { return $this->status; }

    public function setStatus(string $status): void { $this->status = $status; }

    public function getJenisFormulir(): string { return $this->jenis_formulir; }

    public function setJenisFormulir(string $jenis_formulir): void { $this->jenis_formulir = $jenis_formulir; }

    public function getKeterangan(): string { return $this->keterangan; }

    public function setKeterangan(string $keterangan): void { $this->keterangan = $keterangan; }
}
