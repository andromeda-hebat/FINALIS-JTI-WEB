# Dokumentasi Bagi Developer 

Halaman ini menyajikan dokumentasi bagi developer. Jika anda mencari topik spesifik berkaitan dengan hal teknis proyek, anda bisa melihat submenu berikut:
- [Basis data](database.md)
- [UI/UX](ui-ux.md)
- [Frontend](frontend.md)
- [Backend](backend.md)

---

## Cara Pemasangan
Aplikasi ini dapat diinstal pada server lokal maupun server remote.

### Kebutuhan Server
| Jenis | Nama | Versi |
| -- | -- | -- |
| Bahasa pemrograman | PHP | 8.3 atau lebih tinggi |
| Web Server | Apache HTTPD | 2.4.54 |
| Framework | Bootstrap | 5.3.3 |
| Basis data | Microsoft SQL Server | 2022 |
>  ⚠️ Pastikan PHP anda telah terpasang driver untuk Microsoft SQL Server! Driver Microsoft SQL Server bisa didapatkan pada website official Microsoft berikut 👉🏻 https://learn.microsoft.com/en-us/sql/connect/php/download-drivers-php-sql-server?view=sql-server-ver16

### Langkah Instalasi

Langkah-langkah untuk menjalankan proyek di lokal:
1. Kloning repositori

    Buka direktori `xampp/htdocs` atau `laragon/www`. Lalu buka terminal pada direktori tersebut. Kemudian ketikkan perintah di bawah:
    ```bash
    git clone https://github.com/andromeda-hebat/FINALIS-JTI-WEB.git
    ```
2. Nyalakan web server

    Anda bisa menggunakan web server seperti Apache HTTPD atau NGINX untuk menjalankan program. Web server bisa ditemui pada XAMPP atau Laragon.
3. Buka website di browser

    > Jika anda menggunakan Laragon, maka anda bisa buka URL spesial berikut pada browser anda

    Buka pada URL berikut:
    ```bash
    http://finalis-jti-web.test
    ```

---

## Struktur Proyek

```bash
FINALIS-JTI-WEB
├───app
│   ├───controllers     # Perantara antara interaksi dengan data dan tampilan pengguna
│   ├───core            # Basis class utama aplikasi
│   ├───models          # Struktur data dan Business logic aplikasi
│   ├───routes          # Untuk manajemen rute internal website dan suplai eksternal API
│   └───views           # Menampilkan halaman web ke pengguna
│       ├───components  # Bagian kecil dari sebuah halaman yang sering digunakan berulang kali
│       │   ├───admin
│       │   └───mahasiswa
│       ├───pages
│       │   ├───admin
│       │   └───mahasiswa
│       └───templates
├───docs                # Dokumentasi proyek
│   ├───diagram
│   └───guides
├───public              # Akses point pertama oleh web server
│   └───assets
│       ├───img
│       └───js
├───storage             # Sentral penyimpanan file di server
│   ├───administrasi_prodi
│   └───tugas_akhir
├────.env               # Konfigurasi environment
├────.gitignore
├────composer.json      # Manajemen dependensi
├────composer.lock
└────README.md
```