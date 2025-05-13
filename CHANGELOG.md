# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),  
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [0.1.0] - 2025-05-13
### Added
- Inisialisasi proyek Laravel 12 dengan React Vite (Techmin) sebagai frontend.
- Konfigurasi database dan environment dasar (`.env`).
- Struktur folder `Controllers/User` dan `Controllers/Admin`.
- Sistem multi-auth: user (warga) dan admin menggunakan guard dan middleware.
- Fitur register & login menggunakan `LoginRequest` dengan validasi bawaan Laravel.
- Middleware pengaman untuk masing-masing dashboard (`/dashboard` untuk user).
- Halaman login dan register dengan tampilan notifikasi alert untuk pesan sukses/gagal.
- Komponen alert dismissible untuk menampilkan session `success` dan `error`.
- Controller `ErrorController` untuk menangani halaman error seperti 404.
- Redirect halaman tidak ditemukan ke custom error view.

### Changed
- Routing di `web.php` dibagi menjadi beberapa file modular: `auth.php`, `admin-auth.php`.
- Update redirect login sukses ke `/dashboard`, gagal kembali ke halaman login.

### Fixed
- Bug tidak munculnya alert error login karena salah pengiriman flash message.
- Menambahkan pengecekan `session('error')` dan `session('success')` di blade view login dan register.

---

## [0.2.0] - YYYY-MM-DD

