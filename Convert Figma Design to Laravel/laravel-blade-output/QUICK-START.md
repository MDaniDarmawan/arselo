# 🚀 Quick Start Guide - Website SMPN 10 Jember

Panduan cepat untuk menjalankan kode Laravel Blade ini di project Laravel 11 Anda.

## 📋 Langkah-Langkah Instalasi

### 1️⃣ Persiapan Project Laravel

Pastikan Anda sudah punya project Laravel 11:
```bash
# Jika belum punya project Laravel
composer create-project laravel/laravel website-smpn10
cd website-smpn10

# Jika sudah punya, masuk ke folder project
cd nama-project-laravel-anda
```

### 2️⃣ Copy File-File

Copy semua file dari folder ini ke project Laravel Anda:

```bash
# Copy views
cp -r resources/views/* /path/to/laravel-project/resources/views/

# Copy assets (CSS & JS)
cp -r public/css /path/to/laravel-project/public/
cp -r public/js /path/to/laravel-project/public/

# Buat folder images
mkdir -p /path/to/laravel-project/public/images
```

**Atau manual via VS Code:**
1. Buka kedua folder (source dan project Laravel) di VS Code
2. Drag & drop folder `resources/views` ke project Laravel
3. Drag & drop folder `public/css` dan `public/js` ke project Laravel
4. Buat folder `public/images` di project Laravel

### 3️⃣ Setup Routes

Edit file `routes/web.php` di project Laravel Anda:

```php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});
```

Atau copy dari file `web.php.example` yang sudah disediakan.

### 4️⃣ Siapkan Gambar

1. Buka file `CHECKLIST-GAMBAR.md` untuk melihat daftar gambar
2. Export gambar dari Figma atau gunakan foto yang ada
3. Rename sesuai dengan nama di checklist
4. Letakkan semua gambar di `public/images/`

**Gambar penting yang wajib ada:**
- `logo-arselo.png` (navbar)
- `logo-smpn10-large.png` (hero)
- `logo-smpn10.png` (footer)
- `kepala-sekolah.png` (sambutan)

### 5️⃣ Jalankan Server

```bash
# Pastikan Anda di root project Laravel
php artisan serve
```

Buka browser: `http://localhost:8000`

## ✅ Checklist

- [ ] Project Laravel 11 sudah terinstall
- [ ] Semua file blade sudah di-copy ke `resources/views/`
- [ ] File CSS di-copy ke `public/css/`
- [ ] File JS di-copy ke `public/js/`
- [ ] Folder `public/images/` sudah dibuat
- [ ] Routes sudah ditambahkan di `web.php`
- [ ] Gambar-gambar sudah disiapkan
- [ ] Server Laravel berjalan
- [ ] Website bisa diakses di browser

## 🎨 Kustomisasi Cepat

### Ubah Warna
Edit `public/css/style.css` bagian `:root`:
```css
:root {
    --color-primary: #408fd9;  /* Warna utama */
    --color-dark: #092c4c;     /* Warna gelap */
}
```

### Ubah Konten Navbar
Edit `resources/views/partials/navbar.blade.php`

### Ubah Konten Footer
Edit `resources/views/partials/footer.blade.php`

### Ubah Konten Beranda
Edit `resources/views/pages/beranda.blade.php`

## 🐛 Troubleshooting

### Gambar tidak muncul?
1. Check apakah gambar ada di `public/images/`
2. Check nama file sudah benar (case-sensitive!)
3. Clear cache browser (Ctrl+Shift+R)
4. Check console browser untuk error 404

### CSS tidak load?
1. Check file ada di `public/css/style.css`
2. Refresh dengan Ctrl+Shift+R
3. Check di view source, link CSS sudah benar

### JavaScript tidak jalan?
1. Check file ada di `public/js/script.js`
2. Buka console browser (F12) lihat error
3. Check apakah ada typo di console

### Mobile menu tidak berfungsi?
1. Check JavaScript sudah load
2. Check ID `navbarToggle` ada di navbar
3. Buka console untuk lihat error

## 📱 Test Responsive

Setelah website jalan, test di berbagai ukuran:
1. Desktop (> 1024px)
2. Tablet (768px - 1024px)
3. Mobile (< 768px)

Di Chrome/Edge: Tekan F12 → klik icon Device Toggle (Ctrl+Shift+M)

## 🎯 Langkah Selanjutnya

Setelah website berjalan dengan baik:

1. **Tambah halaman lain**:
   - Tentang Kami
   - Akademik
   - Kesiswaan
   - Galeri
   - Kontak

2. **Integrasikan dengan database**:
   - Buat model untuk Artikel
   - Buat model untuk Prestasi
   - Buat admin panel dengan Laravel Nova/Filament

3. **Optimasi**:
   - Compress semua gambar
   - Enable lazy loading
   - Add meta tags untuk SEO
   - Setup sitemap

4. **Deploy**:
   - Push ke GitHub
   - Deploy ke hosting (shared/VPS/cloud)
   - Setup domain

## 📞 Bantuan Lebih Lanjut

Baca file-file berikut untuk informasi lengkap:
- `README.md` - Dokumentasi lengkap
- `CHECKLIST-GAMBAR.md` - Daftar gambar yang diperlukan
- `web.php.example` - Contoh routes

---

**Selamat coding! 💻**
