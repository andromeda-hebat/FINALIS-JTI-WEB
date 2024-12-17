<?php

namespace App\Models;

use App\Core\Model;

abstract class Berkas extends Model
{
    protected string $nim;
    protected string $tanggal_request;

    public function getNim(): string { return $this->nim; }

    public function setNim(string $nim): void { $this->nim = $nim; }

    public function getTanggalRequest(): string { return $this->tanggal_request; }

    public function setTanggalRequest(string $tanggal_request): void { $this->tanggal_request = $tanggal_request; }
}
