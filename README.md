# 📦 Sistem Informasi Peminjaman Barang

Aplikasi berbasis web untuk mengelola proses peminjaman dan pengembalian barang secara terstruktur. Sistem ini dirancang untuk membantu peminjam, petugas, dan administrator dalam mengelola data peminjaman barang.

## ✨ Fitur Utama

- 🔐 **Autentikasi:** Sistem login untuk mengakses aplikasi.
- 👨‍💼 **Dashboard Administrator:** Mengelola data dan konfigurasi sistem.
- 👤 **Dashboard Peminjam:** Memudahkan pengguna mengakses fitur peminjaman barang.
- 🛠️ **Dashboard Petugas:** Membantu petugas mengelola proses peminjaman.
- 🗄️ **Database:** Penyimpanan data menggunakan MySQL melalui file database SQL.
- 🎨 **Antarmuka Web:** Menggunakan struktur layout dan aset untuk tampilan aplikasi.

## 🧰 Teknologi yang Digunakan

- PHP
- MySQL
- HTML
- Bootstrap

## 📁 Struktur Project

```text
peminjaman-barang/
├── administrator/
├── assets/
├── auth/
├── config/
├── layouts/
├── peminjam/
│   └── dashboard/
├── petugas/
│   └── dashboard/
├── db_peminjaman.sql
├── hash_password.php
└── index.php
```

## ⚙️ Persyaratan

- PHP
- MySQL atau MariaDB
- Web server lokal, seperti XAMPP
- Browser modern

## 🚀 Cara Instalasi

1. Clone atau download repository ini.
2. Pindahkan folder project ke direktori `htdocs` jika menggunakan XAMPP.
3. Jalankan Apache dan MySQL melalui XAMPP Control Panel.
4. Buka phpMyAdmin melalui browser.
5. Buat database baru sesuai konfigurasi aplikasi.
6. Import file `db_peminjaman.sql` ke database tersebut.
7. Sesuaikan konfigurasi koneksi database pada folder `config/`.
8. Buka aplikasi melalui browser:

   `http://localhost/peminjaman-barang/`

## 🗄️ Konfigurasi Database

Pastikan konfigurasi koneksi database sesuai dengan lingkungan lokal kamu, termasuk:

- Host database
- Nama database
- Username database
- Password database

Periksa file konfigurasi pada folder `config/` untuk mengetahui pengaturan yang digunakan aplikasi.

## 👨‍💻 Pengembangan

Project ini dapat dikembangkan lebih lanjut dengan menambahkan validasi data, pengelolaan stok barang, riwayat peminjaman, laporan, serta peningkatan keamanan autentikasi.

## 📄 Lisensi

Belum ada Lisensi pada project ini

---

**Status:** Dalam pengembangan dan belum selesai

**Repository:** `peminjaman-barang`
