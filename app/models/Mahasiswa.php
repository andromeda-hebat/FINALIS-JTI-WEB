<?php

namespace App\Models;

class Mahasiswa extends User
{
    private int $nomor;
    private string $jurusan;
    private string $prodi;
    private string $email;
    private string $tahun_masuk;


    public function getNomor(): int { return $this->nomor; }

    public function setNomor(int $nomor): void { $this->nomor = $nomor; }

    public function getJurusan(): string { return $this->jurusan; }

    public function setJurusan($jurusan): void { $this->jurusan = $jurusan; }

    public function getProdi(): string { return $this->prodi; }

    public function setProdi(string $prodi): void { $this->prodi = $prodi; }

    public function getEmail(): string { return $this->email; }

    public function setEmail(string $email): void { $this->email = $email; }

    public function getTahunMasuk(): string { return $this->tahun_masuk; }

    public function setTahunMasuk(string $tahun_masuk): void { $this->tahun_masuk = $tahun_masuk; }
}
