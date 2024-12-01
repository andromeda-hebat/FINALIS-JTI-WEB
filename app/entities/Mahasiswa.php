<?php

namespace App\Entities;

class Mahasiswa
{
    private string $nim;
    private string $nama_lengkap;
    private string $password;
    private string $email;
    private string $jurusan;

    private string $prodi;
    
    public function __set(string $name, mixed $value): void { }

}