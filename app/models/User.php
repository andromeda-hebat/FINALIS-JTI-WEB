<?php

namespace App\Models;

use App\Core\Model;

class User extends Model
{
    public string $user_id;
    public string $nama_lengkap;
    public string $role;
    public string $password;
    public string $foto_profil;

    public function getUserId(): string { return $this->user_id; }

    public function setUserId(string $user_id): void { $this->user_id = $user_id; }

    public function getNamaLengkap(): string { return $this->nama_lengkap; }

    public function setNamaLengkap(string $nama_lengkap): void { $this->nama_lengkap = $nama_lengkap; }

    public function getRole(): string { return $this->role; }

    public function setRole(string $role): void { $this->role = $role; }

    public function getPassword(): string { return $this->password; }

    public function setPassword(string $password): void { $this->password = $password; }

    public function getFotoProfil(): string { return $this->foto_profil; }

    public function setFotoProfil(string $foto_profil): void { $this->foto_profil = $foto_profil; }
}
