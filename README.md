# FINALIS JTI

FINALIS JTI adalah sebuah sistem yang digunakan dibangun untuk Jurusan Teknologi Informasi Politeknik Negeri Malang. Tujuannya adalah untuk memudahkan mahasiswa tingkat akhir dalam mengakses informasi mengenai tanggungan yang masih ada setelah mengerjakan Tugas Akhir/Skripsi. Sistem ini berbasis website, sehingga dapat diakses oleh mahasiswa tingkat akhir dan admin terkait. Diharapkan, sistem ini dapat memudahkan proses administrasi yang menggunakan sistem manual.

## Cara Pemasangan
Aplikasi ini dapat diinstal pada server lokal maupun server remote.

### Kebutuhan Server
| Jenis | Nama | Versi |
| -- | -- | -- |
| Bahasa pemrograman | PHP | 8.3 atau lebih tinggi |
| Framework | Bootstrap | 5.3.3 |
| Basis data | Microsoft SQL Server | 2022 |

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
    finalis-jti-web.test
    ```

---

## Struktur Proyek

```bash
(root)
├───app
│   ├───config
│   ├───controllers
│   ├───core
│   ├───models
│   └───views
│       ├───components
│       │   ├───admin
│       │   └───mahasiswa
│       ├───pages
│       │   ├───admin
│       │   └───mahasiswa
│       └───templates
├───docs
│   ├───diagram
│   └───guides
├───public
│   └───assets
│       ├───img
│       └───js
├────.gitignore
└────README.md
```

---

## Teknologi yang Digunakan

Berikut adalah beberapa teknologi yang digunakan selama proses pengembangan proyek:
| Bagian pengembangan | Teknologi yang digunakan |
|--|--|
| UI/UX | Figma |
| Database | Microsoft SQL Server |
| Frontend | HTML, CSS, JavaScript, jQuery, Bootstrap |
| Backend | PHP |

---

## Kontributor
| Nama | GitHub | Peran |
|--|--| -- |
| Farrel Augusta Dinata | [@FarrelAD](https://github.com/FarrelAD) | Backend developer |
| Afifah Khoirunnisa | [@afifahnisa17](https://github.com/afifahnisa17) | Database designer |
| Dewita Anggraini | [@DewitaA12](https://github.com/DewitaA12) | UI/UX designer |
| Fajar Aditya Nugraha | [@FajarAdityaNugraha](https://github.com/FajarAdityaNugraha) | UI/UX designer |
| Stevan Zaky Setyanto | [@vanstevanzaky](https://github.com/vanstevanzaky) | Frontend developer |

---
---