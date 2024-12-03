<?php

namespace App\Models;

use App\Core\Model;

class User extends Model
{
    private string $user_id;
    private string $nama_lengkap;
    private string $role;
    private string $password;
    private string $profile_photo;

    public function getUserId(): string
    {
        return $this->user_id;
    }

    public function setUserId(string $user_id): void
    {
        $this->user_id = $user_id;
    }

    public function getNamaLengkap(): string
    {
        return $this->nama_lengkap;
    }

    public function setNamaLengkap(string $nama_lengkap): void
    {
        $this->nama_lengkap = $nama_lengkap;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): void
    {
        $this->role = $role;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getProfilePhoto(): string
    {
        return $this->profile_photo;
    }

    public function setProfilePhoto(string $profile_photo): void
    {
        $this->profile_photo = $profile_photo;
    }
}
