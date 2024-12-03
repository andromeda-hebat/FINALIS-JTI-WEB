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
}
