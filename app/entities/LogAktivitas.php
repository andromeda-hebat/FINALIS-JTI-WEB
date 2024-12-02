<?php

namespace App\Entities;

class LogAktivitas
{
    private int $log_id;
    private string $id_admin;
    private string $tindakan;
    private string $deskripsi;
    private string $target_id;
    private string $status_sebelumnya;
    private string $status_sesudahnya;
    private string $waktu_aktivitas;
    private string $jenis_berkas;

    
    public function __set(string $name, mixed $value): void { }
}