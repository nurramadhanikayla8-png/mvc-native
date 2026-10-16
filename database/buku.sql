CREATE DATABASE IF NOT EXISTS perpustakaan
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE perpustakaan;

CREATE TABLE IF NOT EXISTS buku (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(150) NOT NULL,
    penulis VARCHAR(100) NOT NULL,
    penerbit VARCHAR(100) NOT NULL,
    tahun_terbit YEAR NOT NULL,
    kategori VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO buku (judul, penulis, penerbit, tahun_terbit, kategori) VALUES
('Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', 2005, 'Novel'),
('Bumi Manusia', 'Pramoedya Ananta Toer', 'Lentera Dipantara', 1980, 'Sejarah'),
('Filosofi Teras', 'Henry Manampiring', 'Kompas', 2018, 'Pengembangan Diri');