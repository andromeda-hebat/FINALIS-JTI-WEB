# Dokumentasi Backend 🐔

[Kembali](README.md)

Halaman ini berisi dokumentasi backend yang diimplementasikan di sistem FINALIS JTI.

## Arsitektur Aplikasi

Arsitektur yang digunakan pada proyek kali ini adalah berupa MVC (Model-View-Controller). Jenis arsitektur ini dipilih karena dapat memudahkan pengelolaan kode terlebih lagi proyek yang memiliki kode yang sudah cukup banyak. Pembagian logika program untuk mendapatkan data, menampilkan data, serta proses request dan response dilakukan terpisah sehingga tidak menyulitkan dalam mengelola kode program. 

Aplikasi yang dibangun juga dibuat berdasarkan konsep OOP (Object-Oriented-Programming). Sebuah aplikasi dengan OOP cenderung memiliki tingkat konsistensi yang lebih tinggi daripada konsep yang lain. Data-data yang dibutuhkan lebih terstruktur dengan lebih rapi. Selain itu, OOP juga meningkatkan *reusability* program. Logika program yang sekiranya bisa digunakan berulang kali, maka bisa digunakan dengan mudah pada konsep OOP.

## Alur Aplikasi

### Folder public
Untuk memahami alur dari aplikasi ini, maka bisa dilihat pada folder bernama [/public](../../../public/). Folder ini digunakan sebagai entri poin atau titik awal dari aplikasi web berjalan. Agar aplikasi web ini dijalankan dengan baik, maka dibutuhkan **web server** agar bisa menyajikan konten yang ada di proyek ini ke klien. Contoh web server adalah [Apache HTTPD Server](https://httpd.apache.org/). Apache tersebut akan mengakses konten yang ada melalui kode di folder public.

Jika dilihat pada folder public, maka terdapat beberapa folder dan file. Folder assets dan file adalah dua buah direktori yang bisa diakses langsung melalui website asalkan tahu URL yang dibutuhkan. Mari kita fokuskan pada 2 file yang ada di dalam folder public, yaitu [.htaccess](../../../public/.htaccess) dan [index.php](../../../public/index.php). File **.htaccess** digunakan untuk konfigurasi web server yang digunakan dalam hal ini adalah Apache HTTPD. Sedangkan pada file **index.php** adalah file yang bakal dieksekusi oleh web server. File tersebut akan menyambungkan kode program yang ada di direktori lain dan menyajikannya ke klien. 

### Index.php dan routing

File index.php adalah file inti. Tanpanya kode program yang lain tidak ada artinya. Berikut adalah isi dari file **index.php**:
```php
<?php

use App\Core\Router;
use Dotenv\Dotenv;

(Dotenv::createImmutable(__DIR__ . '/../'))->load();

session_start();
Router::run();
```
Isinya cukup sederhana namun bisa menghubungkan aplikasi yang begitu kompleks. Inti dari kode tersebut adalah berusaha melakukan *loading environment variable* ke program PHP dengan bantuan library [vlucas/phpdotenv](https://github.com/vlucas/phpdotenv) dan menjalankan routing yang sudah dibuat. Routing ini adalah suatu program yang bisa mengarahkan request dari client ke sumber daya web yang diinginkan. Misalnya saja, terdapat pengguna yang ingin melakukan request mendapatkan halaman login dengan URL: `http://finalis-jti-web.test/login`, maka URL tersebut akan dicek pada program routing. Jika ditemukan rute yang cocok, maka akan dilanjutkan prosesnya sehingga klien mendapatkan respon yang diinginkan. Jika tidak mendapatkan request yang tidak sesuai, maka klien akan diberitahukan bahwa URL yang dimasukkan tidak sesuai atau tidak bisa ditemukan. 

---
---
