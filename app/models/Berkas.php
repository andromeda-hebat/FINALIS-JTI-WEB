<?php

namespace App\Models;

use App\Core\Model;

class Berkas extends Model
{
    public string $nim;
    public string $tanggal_request;

    public function __construct(?string $nim = null, ?string $tanggal_request = null)
    {
        $this->nim = $nim;
        $this->tanggal_request = $tanggal_request;
    }
}
