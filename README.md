# 🧺 LMS — Laundry Management System

Sistem Manajemen Laundry berbasis web yang dibangun dengan **PHP (MVC)**, **MySQL**, dan **Tailwind CSS**. Dirancang untuk memudahkan operasional bisnis laundry, mulai dari pencatatan transaksi, manajemen pelanggan, pemantauan status cucian, hingga laporan pendapatan.

---

## 📋 Daftar Isi

- [Fitur Utama](#-fitur-utama)
- [Tech Stack](#-tech-stack)
- [Arsitektur Aplikasi](#-arsitektur-aplikasi)
- [Struktur Direktori](#-struktur-direktori)
- [Skema Database](#-skema-database)
- [Role & Akses Pengguna](#-role--akses-pengguna)
- [Instalasi & Menjalankan Aplikasi (Docker)](#-instalasi--menjalankan-aplikasi-docker)
- [Konfigurasi](#-konfigurasi)
- [Panduan Penggunaan](#-panduan-penggunaan)
- [URL Routing](#-url-routing)

---

## ✨ Fitur Utama

| Fitur | Owner | Admin |
|---|:---:|:---:|
| Login & Autentikasi | ✅ | ✅ |
| Dashboard Ringkasan | ✅ | ✅ |
| Buat Transaksi Baru | — | ✅ |
| Tambah Item Cucian Dinamis | — | ✅ |
| Update Status Cucian | — | ✅ |
| Tambah Pelanggan Baru | — | ✅ |
| Laporan Pendapatan | ✅ | — |
| Cetak Laporan | ✅ | — |
| Responsive (Mobile & Desktop) | ✅ | ✅ |

---

## 🛠 Tech Stack

| Komponen | Teknologi |
|---|---|
| Backend | PHP 8.2 |
| Web Server | Apache (mod_rewrite) |
| Database | MySQL 8.0 |
| Database Driver | PDO (PHP Data Objects) |
| Frontend Styling | Tailwind CSS (via CDN) |
| Icons | Google Material Symbols |
| Font | Inter (Google Fonts) |
| Containerization | Docker & Docker Compose |

---

## 🏗 Arsitektur Aplikasi

Aplikasi ini menggunakan pola arsitektur **MVC (Model-View-Controller)** kustom berbasis PHP murni.

```
Request (URL)
    ↓
public/index.php  ← Entry Point & Bootstrap
    ↓
app/core/App.php  ← Router (URL → Controller/Method)
    ↓
app/controllers/  ← Controller (Logika Bisnis)
    ↓
app/models/       ← Model (Akses Database via PDO)
    ↓
app/views/        ← View (Tampilan HTML + Tailwind CSS)
    ↓
Response (HTML)
```

Semua request diarahkan melalui satu entry point (`public/index.php`) dengan bantuan konfigurasi `.htaccess` yang mengaktifkan URL rewriting dari Apache.

---

## 📁 Struktur Direktori

```
Proyek-Laundry Management-System_LMS/
│
├── 📄 Dockerfile               # Konfigurasi Docker image (PHP 8.2 + Apache)
├── 📄 docker-compose.yml       # Orkestrasi container (web + db)
│
├── 📁 app/
│   ├── 📁 config/
│   │   └── database.php        # Konfigurasi koneksi PDO ke MySQL
│   │
│   ├── 📁 core/
│   │   ├── App.php             # Router utama aplikasi
│   │   └── Controller.php      # Base Controller (model, view, redirect)
│   │
│   ├── 📁 controllers/
│   │   ├── AuthController.php          # Login, Logout
│   │   ├── DashboardController.php     # Halaman Dashboard (Owner & Admin)
│   │   ├── TransactionController.php   # CRUD Transaksi & Update Status
│   │   ├── CustomerController.php      # Tambah Pelanggan Baru
│   │   └── ReportController.php        # Laporan Pendapatan (Owner only)
│   │
│   ├── 📁 models/
│   │   ├── User.php            # Model pengguna (autentikasi)
│   │   ├── Pelanggan.php       # Model pelanggan (CRUD)
│   │   ├── Layanan.php         # Model layanan/service
│   │   └── Transaksi.php       # Model transaksi & detail
│   │
│   └── 📁 views/
│       ├── 📁 layouts/
│       │   ├── header.php      # HTML head, Tailwind config, CSS
│       │   ├── sidebar.php     # Sidebar Desktop + Bottom Nav Mobile
│       │   └── topbar.php      # Topbar / header bar aplikasi
│       │
│       ├── 📁 auth/
│       │   └── login.php       # Halaman Login
│       │
│       ├── 📁 dashboard/
│       │   ├── owner.php       # Dashboard khusus Owner
│       │   ├── admin.php       # Dashboard khusus Admin
│       │   └── _recent_transactions.php  # Partial: tabel transaksi terakhir
│       │
│       ├── 📁 transaction/
│       │   ├── create.php      # Form buat transaksi baru (POS)
│       │   └── index.php       # Daftar & update status cucian
│       │
│       ├── 📁 customer/
│       │   └── create.php      # Form tambah pelanggan baru
│       │
│       └── 📁 report/
│           └── index.php       # Laporan pendapatan (Owner only)
│
├── 📁 database/
│   └── schema.sql              # DDL schema + seed data awal
│
├── 📁 public/
│   ├── index.php               # Entry point aplikasi
│   └── .htaccess               # URL Rewriting Apache
│
└── 📁 Doc/
    └── SRS.md                  # Software Requirements Specification
```

---

## 🗄 Skema Database

Database menggunakan nama `lms_db` dengan 5 tabel utama:

```sql
┌─────────────────────────────────────────────────────┐
│                      users                          │
│  id_user | username | password (bcrypt) | role      │
│  role: ENUM('Owner', 'Admin')                       │
└──────────────────────┬──────────────────────────────┘
                       │ id_user (FK)
                       ▼
┌─────────────────────────────────────────────────────┐
│                    transaksi                         │
│  id_transaksi | id_user | id_pelanggan              │
│  tanggal_transaksi | total_harga | status_cucian    │
│  status: ENUM('Antre','Proses','Selesai','Diambil') │
└──────────┬──────────────┬───────────────────────────┘
           │ id_pelanggan │ id_transaksi (FK)
           ▼              ▼
┌────────────────┐  ┌─────────────────────────────────┐
│   pelanggan    │  │        detail_transaksi          │
│  id_pelanggan  │  │  id_detail | id_transaksi        │
│  nama_pelanggan│  │  id_layanan | berat | subtotal   │
│  nomor_telepon │  └──────────────┬──────────────────┘
│  alamat        │                 │ id_layanan (FK)
└────────────────┘                 ▼
                         ┌─────────────────────┐
                         │       layanan        │
                         │  id_layanan          │
                         │  nama_layanan        │
                         │  harga_per_kg        │
                         └─────────────────────┘
```

### Data Layanan Bawaan (Seed)

| Nama Layanan | Harga |
|---|---|
| Cuci Komplit | Rp 6.000 / kg |
| Cuci Kering | Rp 4.000 / kg |
| Setrika | Rp 3.000 / kg |
| Cuci Bedcover | Rp 15.000 / kg |

---

## 👥 Role & Akses Pengguna

Sistem menerapkan **Role-Based Access Control (RBAC)** dengan 2 peran:

### 🏆 Owner
- Melihat **Dashboard** ringkasan: total pendapatan, cucian baru, dan status selesai/diambil.
- Melihat **Laporan Pendapatan** lengkap dengan rincian seluruh transaksi.
- Mencetak laporan sebagai PDF melalui fungsi print browser.

### 👷 Admin
- Melihat **Dashboard** operasional: cucian antre, diproses, dan siap diambil.
- Membuat **Transaksi Baru** dengan memilih pelanggan dan menambahkan item cucian secara dinamis.
- **Menambah Pelanggan Baru** langsung dari form transaksi.
- **Memperbarui Status** cucian (Antre → Proses → Selesai → Diambil) secara real-time.

### Akun Default

| Username | Password | Role |
|---|---|---|
| `owner` | `password` | Owner |
| `admin` | `password` | Admin |

> ⚠️ **Penting:** Segera ganti password setelah instalasi pertama.

---

## 🐳 Instalasi & Menjalankan Aplikasi (Docker)

### Prasyarat

Pastikan perangkat Anda telah menginstal:
- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)

### Langkah Instalasi

**1. Clone atau salin repository ke direktori lokal Anda.**

```bash
# Masuk ke direktori project
cd "Proyek-Laundry Management-System_LMS"
```

**2. Build dan jalankan semua container dengan satu perintah:**

```bash
docker compose up -d --build
```

Perintah ini akan secara otomatis:
- 🔨 Membangun Docker image PHP 8.2 + Apache.
- 🗄️ Menjalankan MySQL 8.0 dan membuat database `lms_db`.
- 📦 Mengeksekusi `database/schema.sql` untuk membuat tabel dan mengisi data awal.
- 🌐 Menjalankan web server dan mem-mount kode sumber secara langsung.

**3. Tunggu beberapa saat, lalu buka browser:**

```
http://localhost:8000
```

### Menghentikan Aplikasi

```bash
docker compose down
```

Untuk menghentikan sekaligus menghapus data database (volume):

```bash
docker compose down -v
```

### Melihat Log

```bash
# Log semua container
docker compose logs -f

# Log hanya web server
docker compose logs -f web

# Log hanya database
docker compose logs -f db
```

---

## ⚙️ Konfigurasi

### Koneksi Database

File konfigurasi: `app/config/database.php`

```php
private $host = "db";        // Nama service di docker-compose
private $db_name = "lms_db"; // Nama database
private $username = "root";  // Username MySQL
private $password = "root";  // Password MySQL
```

> **Catatan:** Nilai `host = "db"` adalah nama service yang didefinisikan di `docker-compose.yml`. Jika menjalankan tanpa Docker, ganti menjadi `localhost`.

### Port yang Digunakan

| Service | Port Host | Port Container |
|---|---|---|
| Web (Apache) | `8000` | `80` |
| Database (MySQL) | `3306` | `3306` |

---

## 📖 Panduan Penggunaan

### Membuat Transaksi Baru (Admin)

1. Login sebagai **Admin**.
2. Klik tombol **"Buat Transaksi Baru"** di dashboard atau navigasi ke **New Order**.
3. Pilih **pelanggan** dari dropdown. Jika belum ada, klik **"Tambah Pelanggan Baru"**.
4. Pilih **jenis layanan** dan masukkan **berat (kg/pcs)** untuk setiap item cucian.
5. Klik **"+ Tambah Item"** untuk menambah lebih dari satu jenis layanan.
6. Klik **"Simpan Transaksi"**. Sistem akan menghitung total harga secara otomatis.

### Memperbarui Status Cucian (Admin)

1. Navigasi ke halaman **Laundry Status**.
2. Pada kolom **"Status Cucian & Aksi"**, klik dropdown pada baris transaksi yang ingin diperbarui.
3. Pilih status baru (`Antre` → `Proses` → `Selesai` → `Diambil`).
4. Status akan tersimpan otomatis tanpa perlu menekan tombol apapun.

### Mencetak Laporan Pendapatan (Owner)

1. Login sebagai **Owner**.
2. Navigasi ke **Revenue Reports** (Desktop: sidebar, Mobile: bottom navigation bar).
3. Klik tombol **"Cetak Laporan"** di pojok kanan atas.
4. Gunakan dialog print browser untuk menyimpan sebagai PDF atau mencetak langsung.

---

## 🔗 URL Routing

Sistem routing dibentuk dari URL dengan pola: `/{controller}/{method}/{params}`

| URL | Controller | Deskripsi | Akses |
|---|---|---|---|
| `/` atau `/auth` | AuthController | Halaman Login | Publik |
| `/auth/login` | AuthController@login | Proses Login (POST) | Publik |
| `/auth/logout` | AuthController@logout | Logout & hapus sesi | Semua |
| `/dashboard` | DashboardController | Dashboard utama | Semua |
| `/transaction` | TransactionController | Daftar & status cucian | Semua |
| `/transaction/create` | TransactionController@create | Form transaksi baru | Admin |
| `/transaction/store` | TransactionController@store | Simpan transaksi (POST) | Admin |
| `/transaction/updateStatus` | TransactionController@updateStatus | Update status (POST) | Admin |
| `/customer/create` | CustomerController@create | Form pelanggan baru | Admin |
| `/customer/store` | CustomerController@store | Simpan pelanggan (POST) | Admin |
| `/report` | ReportController | Laporan pendapatan | Owner |

---

## 🚀 Pengembangan Lanjutan (Roadmap)

Beberapa fitur yang dapat dikembangkan di iterasi berikutnya:

- [ ] **Manajemen Layanan**: CRUD untuk daftar layanan dan harga (Owner).
- [ ] **Manajemen Pengguna**: Tambah/hapus akun Admin (Owner).
- [ ] **Nota/Invoice**: Cetak nota per transaksi untuk pelanggan.
- [ ] **Filter & Pencarian**: Filter laporan berdasarkan rentang tanggal.
- [ ] **Notifikasi**: Pemberitahuan saat status cucian berubah.
- [ ] **Manajemen Pelanggan Lengkap**: Daftar, edit, dan hapus data pelanggan.

---

<div align="center">
  <p>Dibuat untuk memudahkan operasional laundry modern.</p>
  <p><strong>Pristine LMS</strong> — The Pristine Flow</p>
</div>
# Project-Laundry-Management-System_LMS
