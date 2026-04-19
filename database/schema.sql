CREATE DATABASE IF NOT EXISTS lms_db;
USE lms_db;

CREATE TABLE IF NOT EXISTS users (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('Owner', 'Admin') NOT NULL
);

CREATE TABLE IF NOT EXISTS pelanggan (
    id_pelanggan INT AUTO_INCREMENT PRIMARY KEY,
    nama_pelanggan VARCHAR(255) NOT NULL,
    nomor_telepon VARCHAR(50) NOT NULL,
    alamat TEXT
);

CREATE TABLE IF NOT EXISTS layanan (
    id_layanan INT AUTO_INCREMENT PRIMARY KEY,
    nama_layanan VARCHAR(255) NOT NULL,
    harga_per_kg DECIMAL(10,2) NOT NULL
);

CREATE TABLE IF NOT EXISTS transaksi (
    id_transaksi INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT NOT NULL,
    id_pelanggan INT NOT NULL,
    tanggal_transaksi DATETIME NOT NULL,
    total_harga DECIMAL(12,2) NOT NULL DEFAULT 0,
    status_cucian ENUM('Antre', 'Proses', 'Selesai', 'Diambil') NOT NULL DEFAULT 'Antre',
    FOREIGN KEY (id_user) REFERENCES users(id_user),
    FOREIGN KEY (id_pelanggan) REFERENCES pelanggan(id_pelanggan)
);

CREATE TABLE IF NOT EXISTS detail_transaksi (
    id_detail INT AUTO_INCREMENT PRIMARY KEY,
    id_transaksi INT NOT NULL,
    id_layanan INT NOT NULL,
    berat FLOAT NOT NULL,
    subtotal DECIMAL(12,2) NOT NULL,
    FOREIGN KEY (id_transaksi) REFERENCES transaksi(id_transaksi) ON DELETE CASCADE,
    FOREIGN KEY (id_layanan) REFERENCES layanan(id_layanan)
);

-- Default seeded data (password is "password")
INSERT INTO users (username, password, role) VALUES 
('owner', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Owner'),
('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Admin');

INSERT INTO layanan (nama_layanan, harga_per_kg) VALUES
('Cuci Komplit', 6000),
('Cuci Kering', 4000),
('Setrika', 3000),
('Cuci Bedcover', 15000);
