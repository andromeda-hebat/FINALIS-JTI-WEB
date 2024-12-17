<?php

namespace App\Models;

class BerkasProdi extends Berkas
{
    private ?string $id_berkas_prodi = null;
    private string $toeic;
    private string $distribusi_tugas_akhir;
    private string $distribusi_magang;
    private string $surat_bebas_kompen;


    public function getIdBerkasProdi(): ?string { return $this->id_berkas_prodi; }

    public function setIdBerkasProdi(?string $id_berkas_prodi): void { $this->id_berkas_prodi = $id_berkas_prodi; }

    public function getToeic(): string { return $this->toeic; }

    public function setToeic(string $toeic): void { $this->toeic = $toeic; }

    public function getDistribusiTugasAkhir(): string { return $this->distribusi_tugas_akhir; }

    public function setDistribusiTugasAkhir(string $distribusi_tugas_akhir): void { $this->distribusi_tugas_akhir = $distribusi_tugas_akhir; }

    public function getDistribusiMagang(): string { return $this->distribusi_magang; }

    public function setDistribusiMagang(string $distribusi_magang): void { $this->distribusi_magang = $distribusi_magang; }

    public function getSuratBebasKompen(): string { return $this->surat_bebas_kompen; }

    public function setSuratBebasKompen(string $surat_bebas_kompen): void { $this->surat_bebas_kompen = $surat_bebas_kompen; }
}