# Aplikasi Web Laravel — Sistem Templating, CRUD, Migration & Autentikasi

Proyek aplikasi web berbasis **Laravel** yang mengimplementasikan sistem templating Blade, operasi CRUD data, migrasi & seeding database (`company`), serta mekanisme autentikasi/pembatasan akses halaman.

---

## Identitas Mahasiswa
- **Nama**: Titania Tirta Cahya Putri
- **NPM**: 2513020080
- **Program Studi**: Sistem Informasi (SI)

---

## Fitur Utama

1. **Sistem Templating (Blade)**
   - Penyajian antarmuka halaman menggunakan Blade template (`resources/views/...`), termasuk halaman data student (`students.index`, `students.create`, `students.edit`), dashboard, dan halaman login.
   - Dukungan feedback pesan notifikasi (`session('success')`) dan validasi input pada form.

2. **CRUD Data (`StudentController`)**
   - **Create**: Menambah data student baru (`GET /students/create` & `POST /students`) dengan validasi (`nim`, `nama`, `prodi`, `email`, `alamat`).
   - **Read**: Menampilkan daftar data student (`GET /students`).
   - **Update**: Mengubah data student yang sudah ada (`GET /students/{student}/edit` & `PUT /students/{student}`).
   - **Delete**: Menghapus data student (`DELETE /students/{student}`).

3. **Migration & Seeding Database**
   - Konfigurasi database `company` dengan tabel utama seperti `students` dan `admins`.
   - Struktur tabel dan data awal dikelola melalui file migrasi dan seeder Laravel.

4. **Autentikasi & Pembatasan Halaman (`Restrict Pages`)**
   - Konfigurasi guard/provider di `config/auth.php` dan registrasi middleware di `bootstrap/app.php`.
   - Pengaturan rute di `routes/web.php` untuk mengelola akses halaman login, logout, serta rute aplikasi.

---

## Struktur Folder Penting

```text
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── StudentController.php
│   │   └── Middleware/
│   └── Models/
│       ├── Admin.php
│       └── Student.php
├── bootstrap/
│   └── app.php
├── config/
│   └── auth.php
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/
│   └── views/
│       └── students/
│           ├── index.blade.php
│           ├── create.blade.php
│           └── edit.blade.php
└── routes/
    └── web.php