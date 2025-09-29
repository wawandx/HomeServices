# 🏡 Aplikasi Home Services

Aplikasi web untuk mengelola dan memesan layanan rumah (seperti kebersihan, perbaikan, dll.) yang dibangun menggunakan **Laravel 12**, **Laravel Sail**, dan **Filament** sebagai panel admin.

---

## 🚀 Fitur
- 🔐 Autentikasi & manajemen pengguna  
- 🛠️ Manajemen layanan rumah (nama, harga, durasi, thumbnail, kategori, dll.)  
- 📑 Fitur repeater untuk manfaat/benefit layanan  
- 💵 Input harga dengan prefix mata uang  
- ⭐ Tandai layanan populer  
- 📊 Dashboard admin dengan Filament  
- 🖼️ Upload file untuk thumbnail layanan  
- ⚡ Struktur siap API  

---

## 🛠️ Teknologi
- [Laravel 12](https://laravel.com/) — Framework PHP  
- [Laravel Sail](https://laravel.com/docs/sail) — Lingkungan dev berbasis Docker  
- [Filament](https://filamentphp.com/) — Admin panel modern  
- [MySQL 8](https://www.mysql.com/) — Database relasional  
- [TailwindCSS](https://tailwindcss.com/) — Framework CSS utility-first  

---

## 📦 Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/username/home-services.git
cd home-services
```

### 2. Salin File Environment

```bash
cp .env.example .env
```

Edit file `.env` sesuai kebutuhan (DB, APP_URL, dll).

### 3. Install Dependency

```bash
composer install
npm install && npm run build
```

### 4. Jalankan dengan Sail (Docker)

```bash
./vendor/bin/sail up -d
```

### 5. Generate App Key

```bash
./vendor/bin/sail artisan key:generate
```

### 6. Migrasi Database & Seeder

```bash
./vendor/bin/sail artisan migrate --seed
```

---

## 🧑‍💻 Pengembangan

* Menjalankan server:

  ```bash
  ./vendor/bin/sail up
  ```

* Migrasi database:

  ```bash
  ./vendor/bin/sail artisan migrate
  ```

* Akses Filament Admin Panel:

  ```
  http://localhost/admin
  ```

---

## 📂 Struktur Proyek

```
app/
 ├── Filament/
 │    └── Resources/
 │         └── HomeServices/
 │              └── Schemas/
 │                   └── HomeServiceForm.php
 ├── Models/
 │    └── HomeService.php
database/
 ├── migrations/
 └── seeders/
```

---

## 🛡️ Keamanan & Catatan

* Selalu ganti kredensial admin default setelah instalasi.
* Gunakan HTTPS di production.
* Pastikan konfigurasi **.env** sudah benar sebelum deploy.

---

## 📜 Lisensi

Proyek ini dilisensikan di bawah **MIT License**.
Bebas digunakan dan dimodifikasi untuk proyek pribadi maupun komersial.

---

## 👨‍💻 Pengembang

Dikembangkan oleh **[Rachmad Kurniawan]** 🚀

---
