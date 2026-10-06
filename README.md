# Pengembangan Aplikasi Web – Pekan 2: HTML, CSS dan PHP

Repositori ini berisi hasil praktikum dan rangkuman materi **Pekan 2** mata kuliah Pengembangan Aplikasi Web, Fakultas Rekayasa Industri, Telkom University.

| | |
|---|---|
| **Nama** | _Isi nama Anda_ |
| **NIM** | _Isi NIM Anda_ |
| **Program Studi** | _Isi program studi Anda_ |

---

## Daftar Isi

1. [Tools Pengembangan](#1-tools-pengembangan)
2. [Arsitektur Aplikasi Web](#2-arsitektur-aplikasi-web)
3. [HTML](#3-html)
4. [CSS](#4-css)
5. [Publikasi dengan GitHub Pages](#5-publikasi-dengan-github-pages)
6. [PHP (Server Side)](#6-php-server-side)
7. [Studi Kasus](#7-studi-kasus)
8. [Struktur Repositori](#8-struktur-repositori)
9. [Cara Menjalankan](#9-cara-menjalankan)
10. [Referensi](#10-referensi)

---

## 1. Tools Pengembangan

- **Text editor:** Visual Studio Code
- **Browser:** Chrome, Firefox, Edge, Safari, Opera
- **Tools tambahan:** Git dan GitHub
- **Server lokal (untuk PHP):** XAMPP (Apache + MySQL/MariaDB + PHP)

## 2. Arsitektur Aplikasi Web

| Sisi | Penjelasan | Teknologi |
|---|---|---|
| **Client side** | Bagian aplikasi yang berjalan di perangkat pengguna: tampilan halaman, validasi input, dan efek animasi. | HTML, CSS, Bootstrap |
| **Server side** | Bagian yang memakai server untuk menyimpan dan memproses data. | PHP, MySQL |

## 3. HTML

**HTML (HyperText Markup Language)** adalah bahasa dasar untuk membangun halaman web.

### Struktur dasar

```html
<!DOCTYPE html>
<html>
<head>
    <title>Judul Halaman</title>
</head>
<body>
    <h1>Ini halaman HTML</h1>
    <p>Ini adalah bagian dari paragraf</p>
</body>
</html>
```

| Elemen | Fungsi |
|---|---|
| `<!DOCTYPE html>` | Mendefinisikan dokumen sebagai HTML5 |
| `<html>` | Elemen dasar halaman |
| `<head>` | Informasi meta tentang dokumen |
| `<title>` | Judul dokumen |
| `<body>` | Konten halaman yang terlihat |

### Catatan penting

- File HTML dan CSS dapat dijalankan dari folder mana saja, tanpa XAMPP.
- File pertama yang dibuka adalah `index.html`.
- Nama folder proyek tidak boleh memakai spasi.
- Tag untuk SEO diletakkan di `<head>`: title, meta description, meta keywords, robots, canonical, schema markup, header tags (H1–H6), alt text pada gambar, dan struktur URL yang SEO-friendly.

## 4. CSS

Ada tiga cara menggunakan CSS:

**1. External style sheet** (di `<head>`)
```html
<link rel="stylesheet" type="text/css" href="style.css">
```

**2. Internal style sheet** (di `<head>`)
```html
<style>
    body { background-color: #333; }
</style>
```

**3. Inline style** (langsung pada elemen)
```html
<h1 style="color: #FF0000; font-size: 30px;">Pengembangan Aplikasi Website (WAD)</h1>
```

## 5. Publikasi dengan GitHub Pages

1. Buka [github.com](https://github.com) lalu pilih **New repository**.
2. Beri nama repositori `username.github.io` (sesuai username GitHub) dan atur ke **Public**.
3. Pilih **creating a new file** atau **uploading an existing file**.
4. Unggah `index.html`, file CSS, dan folder gambar/ikon.
5. Klik **Commit changes**.
6. Buka `https://username.github.io` di browser.

> **Catatan:** GitHub Pages hanya menampilkan file statis (HTML dan CSS). **File PHP tidak dapat dipublikasikan di GitHub.**

## 6. PHP (Server Side)

### Persiapan

1. Instal **XAMPP**, lalu jalankan service **Apache** dan **MySQL** dari XAMPP Control Panel.
2. Buka `localhost` di browser, lalu cek menu **PHPInfo** dan **phpMyAdmin**.
3. Simpan proyek di `C:\xampp\htdocs\NAMA_FOLDER`.
4. Jalankan lewat `localhost/NAMA_FOLDER`. File yang dibuka pertama adalah `index.php`.

### Aturan dasar

- Kode PHP ditulis di antara `<?php ... ?>`.
- `echo` dipakai untuk menampilkan output.
- Setiap statement diakhiri tanda titik koma (`;`).
- Nama variabel diawali `$` dan bersifat **case sensitive**.

### Latihan di folder `demoPHP/`

| File | Materi |
|---|---|
| `hello.php` | Output dengan `echo` |
| `htmlPHP.php` | PHP disisipkan di dalam HTML (perulangan `for`) |
| `htmlPHP2.php` | Menampilkan nilai variabel di dalam HTML |
| `variabel.php` | Variabel dan operasi perkalian |
| `variabel2.php` | Penggabungan string dengan operator titik (`.`) |
| `kondisi.php` | Percabangan `if ... else` |
| `value.php` | Operator `.=` untuk menyambung string |
| `konstanta.php` | Konstanta dengan `const` |
| `define.php` | Konstanta dengan `define()` |
| `larik.php` | Array (larik) dan indeksnya |
| `foreach.php` | Perulangan `foreach` pada array |

## 7. Studi Kasus

### Studi Kasus 1 – Personal Web (Client Side)

Halaman personal statis dengan foto, identitas (nama / NIM / fakultas / program studi), dan ikon sosial media yang terbuka di tab baru (`<a href="..." target="_blank">`). Dipublikasikan melalui GitHub Pages.

Elemen yang digunakan: picture, favicon, link, heading, CSS, background/warna teks, align, font, date and time, table.

### Studi Kasus 1 (versi PHP) – Personal Web (Server Side)

Halaman yang sama, tetapi dibuat dengan PHP (`<?php`, `echo`, `?>`) dan dijalankan di localhost.

### Studi Kasus 2 – Form Input Data Pengguna

Halaman PHP berisi form dengan field **Nama, Email, Jenis Kelamin, Alamat, dan Nomor Telepon**. Setelah tombol **Submit** ditekan, data diproses oleh PHP dan ditampilkan kembali.

Ketentuan:

- Tampilan form dibuat dengan HTML
- Data diproses dengan PHP
- Data dikirim dengan method `POST`
- Hasil input ditampilkan setelah form dikirim
- File utama bernama `index.php`

## 8. Struktur Repositori

```
.
├── README.md
├── demoPHP/
│   ├── hello.php
│   ├── htmlPHP.php
│   ├── htmlPHP2.php
│   ├── variabel.php
│   ├── variabel2.php
│   ├── kondisi.php
│   ├── value.php
│   ├── konstanta.php
│   ├── define.php
│   ├── larik.php
│   └── foreach.php
├── personal_web/
│   └── index.php
└── studi_kasus_2/
    └── index.php
```

## 9. Cara Menjalankan

**File HTML/CSS:** klik dua kali `index.html`, atau buka lewat GitHub Pages.

**File PHP:**

1. Salin folder proyek ke `C:\xampp\htdocs\`.
2. Start **Apache** di XAMPP Control Panel.
3. Buka di browser:
   - `localhost/demoPHP/hello.php`
   - `localhost/personal_web/`
   - `localhost/studi_kasus_2/`

## 10. Referensi

- Scaleyourapp – [Web Application Architecture Explained](https://scaleyourapp.com/web-application-architecture-explained/)
- [W3Schools](https://www.w3schools.com/html/)
- Mihaela Roxana Ghidersa – _Software Architecture for Web Developers_
- Steve Suehring & Janet Valade – _PHP, MySQL, JavaScript & HTML5 All-in-One For Dummies_
- Paul McFedries – _HTML, CSS, Javascript All-in-One For Dummies_
