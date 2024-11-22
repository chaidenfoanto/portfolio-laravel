# Portfolio Website

---
## 👤 Pengembang
Nama: Chaiden Richardo Foanto  
NIM: 0806022310023  
Mata Kuliah: Web Development - AFL 2  
---

## 🚀 Fitur Utama
1. **Desain Responsif**  
   Website menyesuaikan tampilan di berbagai ukuran layar (desktop, tablet, dan ponsel).
   
2. **Struktur Modular SASS**  
   Styling dikelola menggunakan SASS dengan struktur file yang terorganisasi (base, layout, modules, dan pages).

3. **Animasi dan Interaktivitas**  
   Menyertakan animasi CSS untuk navigasi, splashscreen, dan elemen lainnya.

4. **Navigasi Intuitif**  
   Menu navigasi yang mudah digunakan untuk berpindah antar halaman.

---

Ini adalah proyek tugas mata kuliah **AFL 2** yang bertujuan untuk membuat sebuah website portfolio menggunakan teknologi modern. Proyek ini berfokus pada desain yang responsif, struktur modular, dan animasi interaktif untuk memberikan pengalaman pengguna yang menarik.

---

## 🚀 Fitur Utama
1. **Desain Responsif**  
   Website menyesuaikan tampilan di berbagai ukuran layar (desktop, tablet, dan ponsel).
   
2. **Struktur Modular SASS**  
   Styling dikelola menggunakan SASS dengan struktur file yang terorganisasi (base, layout, modules, dan pages).

3. **Animasi dan Interaktivitas**  
   Menyertakan animasi CSS untuk navigasi, splashscreen, dan elemen lainnya.

4. **Navigasi Intuitif**  
   Menu navigasi yang mudah digunakan untuk berpindah antar halaman.

---

## 📂 Struktur Proyek

**Folder Utama:**
- `public/css/`: Output file CSS yang di-generate dari SASS.
- `sass/`: Folder untuk file SASS dengan struktur berikut:
  - `1-base/`: Berisi normalize.css, variabel, tipografi, dan styling dasar.
  - `2-layout/`: Berisi pengaturan grid atau tata letak utama.
  - `3-modules/`: Berisi modul seperti tombol, navigasi, animasi, dll.
  - `4-pages/`: Styling khusus untuk halaman-halaman tertentu.
- `public/js/`: File JavaScript untuk interaktivitas.
- `public/assets/`: Berisi gambar, ikon, atau media lainnya.

**File Penting:**
- `index.html`: Halaman utama portfolio.
- `README.md`: Dokumentasi proyek.

---

## 🔧 Teknologi yang Digunakan
- **HTML5**: Untuk struktur halaman.
- **SASS (SCSS)**: Untuk styling modular dan efisien.
- **JavaScript**: Untuk menambahkan interaktivitas.
- **CSS3**: Untuk animasi dan efek visual.
- **Git & GitHub**: Untuk manajemen versi.

---

## 📦 Cara Menggunakan
1. **Clone repository ini**:
   ```bash
   git clone https://github.com/chaidenfoanto/portfolio-laravel-AFL2.git
   cd portfolio-laravel-AFL2
    ```

2. Install dependencies (jika ada): Jalankan perintah berikut untuk menginstal semua dependencies:
    ```bash
    composer install
    ```

3. Setel file environment: Salin file .env.example menjadi .env:
    ```bash
    cp .env.example .env
    ```
    Sesuaikan konfigurasi database di file .env.

4. Generate key aplikasi: Jalankan perintah berikut untuk membuat key aplikasi Laravel:
    ```bash
    php artisan key:generate
    ```

5. Migrasi database: Jika menggunakan database, migrasikan tabel menggunakan:
   ```bash
   php artisan migrate
    ```

6. Jalankan server lokal: Jalankan proyek dengan perintah:
    ```bash
    php artisan serve
    ```

7. Akses website:
    Buka browser dan akses http://127.0.0.1:8000.

---

## 🔧 Alat yang Dibutuhkan

Untuk menjalankan proyek ini, pastikan Anda sudah menginstal alat-alat berikut:

1. **PHP**  
   - Minimal versi [masukkan versi minimal PHP yang digunakan].
   - Unduh di [https://www.php.net/](https://www.php.net/).

2. **Composer**  
   - Manajer dependensi untuk PHP.  
   - Instalasi Composer dapat dilakukan melalui [https://getcomposer.org/](https://getcomposer.org/).

3. **Database Server**  
   - Gunakan salah satu database seperti:
     - MySQL
     - PostgreSQL
     - SQLite  
   - Pastikan konfigurasi sesuai dengan file `.env`.

4. **Browser**  
   - Browser modern seperti Google Chrome, Mozilla Firefox, atau Microsoft Edge.

5. **Text Editor atau IDE** (opsional)  
   - Untuk pengeditan kode, rekomendasi:
     - Visual Studio Code
     - PHPStorm
     - Sublime Text
     
6. **Node.js** (opsional, jika proyek menggunakan npm atau frontend build tools)  
   - Minimal versi [masukkan versi minimal Node.js yang digunakan].  
   - Unduh di [https://nodejs.org/](https://nodejs.org/).

