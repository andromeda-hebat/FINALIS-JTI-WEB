<?php

namespace App\Entities;

class Admin
{
    private string $id_admin;
    private string $nama_lengkap;
    private string $password;
    private string $email;
    private string $jabatan;
    
    public function __set(string $name, mixed $value): void { }

}