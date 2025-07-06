# 🛒 Toko Online – CodeIgniter 4

Ini adalah aplikasi web toko online sederhana yang dibuat menggunakan framework **CodeIgniter 4** dan tema admin **NiceAdmin**. Fitur utamanya mencakup manajemen produk, keranjang belanja, transaksi, diskon dinamis, serta integrasi API ongkir (RajaOngkir via Komerce).

---

## 📌 Fitur Utama

### 🎨 Katalog Produk
- Daftar produk lengkap dengan gambar, nama, harga, dan diskon.
- Harga otomatis terpengaruh diskon jika sedang aktif.
- UI responsif & menarik menggunakan template **NiceAdmin**.

### 🛒 Keranjang Belanja
- Tambah produk dari halaman utama.
- Ubah jumlah item, hapus produk, atau kosongkan semua isi keranjang.
- Data keranjang disimpan di **session** menggunakan library helper `Cart`.

### 💳 Checkout & Transaksi
- Checkout menampilkan detail belanja + ongkir.
- Perhitungan ongkir menggunakan **API Komerce (RajaOngkir)**.
- Simpan riwayat transaksi per user.
- Lihat detail pembelian di halaman profil.

### 🔖 Diskon Produk
- Admin bisa mengaktifkan diskon potongan harga (CRUD).
- Diskon disimpan di session dan otomatis dihitung pada total belanja.

### 🔐 Autentikasi
- Sistem login multi-user dengan session.
- Role: `admin` dan `user`.
- Halaman tertentu hanya bisa diakses jika login (via middleware filter).

### ⚙️ Panel Admin
- CRUD produk (termasuk upload gambar).
- Kelola diskon harian.
- Export data produk ke PDF menggunakan **Dompdf**.

### 🌐 API & Ongkir
- Endpoint `GET /api` untuk mengambil semua transaksi + total item.
- Autentikasi sederhana via header: `Key: YOUR_API_KEY`.
- Ongkir dari provinsi/kota dihitung realtime via API.

---

## 🧰 Persyaratan Sistem

| Komponen     | Versi Minimum |
|--------------|----------------|
| PHP          | 8.2            |
| MySQL/MariaDB| 5.7+           |
| Composer     | Terbaru        |

### Ekstensi PHP wajib:
- `intl` (untuk `number_to_currency()`)
- `curl` (API HTTP client)
- `fileinfo` (upload gambar)

---

## ⚙️ Langkah Instalasi

1. **Clone proyek ini**
   ```bash
   git clone https://github.com/username/toko-ci4.git
   cd toko-ci4
Install dependensi

bash
Salin
Edit
composer install
Buat database

Buka phpMyAdmin, buat database baru misalnya: db_ci4.

Konfigurasi .env

Duplikat .env.example jadi .env.

Isi konfigurasi database:

pgsql
Salin
Edit
database.default.hostname = localhost
database.default.database = db_ci4
database.default.username = root
database.default.password =
Tambahkan juga API_KEY=yourapikeyhere

Migrasi tabel

bash
Salin
Edit
php spark migrate
Isi data awal (seeder)

bash
Salin
Edit
php spark db:seed ProductSeeder
php spark db:seed UserSeeder
Jalankan server

bash
Salin
Edit
php spark serve
Buka http://localhost:8080 di browser.

## 📁 Struktur Proyek

```text
├── app/
│   ├── Config/
│   │   └── Routes.php
│   ├── Controllers/
│   │   ├── ApiController.php
│   │   ├── AuthController.php
│   │   ├── DiskonController.php
│   │   ├── Home.php
│   │   ├── ProdukController.php
│   │   └── TransaksiController.php
│   ├── Filters/
│   │   ├── Auth.php
│   │   └── Redirect.php
│   ├── Models/
│   │   ├── ProductModel.php
│   │   ├── TransactionDetailModel.php
│   │   ├── TransactionModel.php
│   │   └── UserModel.php
│   └── Views/
│       ├── layout.php
│       ├── v_checkout.php
│       ├── v_diskon.php
│       ├── v_keranjang.php
│       ├── v_login.php
│       ├── v_produk.php
│       ├── v_produkPDF.php
│       └── v_profile.php
├── public/
│   ├── index.php
│   ├── assets/
│   │   └── NiceAdmin/ ← folder template admin (CSS, JS)
│   └── img/ ← folder untuk upload foto produk & profil user
├── writable/
│   ├── logs/
│   └── session/
└── .env
```
