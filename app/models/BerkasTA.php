<?php

namespace App\Models;

class BerkasTA extends Berkas
{
    public string $laporan_ta;
    public string $aplikasi;
    public string $bukti_publikasi;

    public function __construct(?string $nim = null, ?string $tanggal_request = null, ?string $laporan_ta = null, ?string $aplikasi = null, ?string $bukti_publikasi = null)
    {
        parent::__construct($nim, $tanggal_request);
        $this->laporan_ta = $laporan_ta;
        $this->aplikasi = $aplikasi;
        $this->bukti_publikasi = $bukti_publikasi;
    }
}