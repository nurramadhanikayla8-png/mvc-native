# MVC PHP Native - Data Buku

Aplikasi CRUD sederhana untuk mempelajari pola Model-View-Controller pada PHP Native dengan studi kasus data buku.

## Kebutuhan

- PHP 8.0 atau lebih baru
- MySQL/MariaDB
- Web server lokal seperti XAMPP atau Laragon
- Git

## Instalasi

1. Clone atau salin project ke folder web server.
2. Import `database/buku.sql`.
3. Sesuaikan koneksi pada `config/database.php`.
4. Buka `http://localhost/mvc-native/public/index.php`.

## Struktur MVC

- `app/models/` : akses dan operasi data.
- `app/controllers/` : alur request dan pemanggilan Model/View.
- `app/views/` : tampilan HTML.
- `config/` : konfigurasi koneksi database.
- `database/` : skema dan data awal SQL.
- `public/` : entry point aplikasi.

## Fitur

- Menampilkan data buku
- Menambah data buku
- Mengubah data buku
- Menghapus data buku

## Atribut Data Buku

- Judul
- Penulis
- Penerbit
- Tahun Terbit
- Kategori

## Histori Git
- 7badb6a (HEAD -> main) fix: update book database schema
- 8d3d4b9 feat: add complete CRUD routing
- 8d5b68f feat: add complete book CRUD views
- 4e5cc92 feat: add complete book CRUD controller
- d6a2358 feat: add complete book CRUD model
- 3268045 feat: add PDO database connection
- 650a79f feat: add book database schema and seed data
- 4b469a1 chore: initialize mvc php native project