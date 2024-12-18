<?php

namespace App\Models;

use App\Core\Model;

class Notification extends Model
{
    private int $id_notifikasi;
    private string $admin;
    private string $mahasiswa;
    private string $pesan;
    private string $tanggal;
    private string $status;

    public function getIdNotifikasi(): int { return $this->id_notifikasi; }

    public function setIdNotifikasi(int $id_notifikasi): void { $this->id_notifikasi; }

    public function getAdmin(): string { return $this->admin; }

    public function setAdmin(string $admin): void { $this->admin = $admin; }

    public function getMahasiswa(): string { return $this->mahasiswa; }

    public function setMahasiswa(string $mahasiswa): void { $this->mahasiswa = $mahasiswa; }

    public function getPesan(): string { return $this->pesan; }

    public function setPesan(string $pesan): void { $this->pesan = $pesan; }

    public function getTanggal(): string { return $this->tanggal; }

    public function setTanggal(string $tanggal): void { $this->tanggal = $tanggal; }

    public function getStatus(): string { return $this->status; }

    public function setStatus(string $status): void { $this->status = $status; }
}
