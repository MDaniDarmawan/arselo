# Website SMPN 10 Jember - Laravel Blade

Kode frontend website SMPN 10 Jember yang telah dikonversi dari desain Figma ke Laravel Blade dengan HTML, CSS, dan JavaScript.

## 📁 Struktur Folder

```
laravel-blade-output/
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── main.blade.php          # Layout utama
│       ├── partials/
│       │   ├── navbar.blade.php        # Komponen navbar
│       │   └── footer.blade.php        # Komponen footer
│       └── pages/
│           └── beranda.blade.php       # Halaman beranda
└── public/
    ├── css/
    │   └── style.css                   # File CSS utama
    ├── js/
    │   └── script.js                   # File JavaScript
    └── images/                         # Folder untuk gambar
        └── (letakkan gambar di sini)
```

## 🚀 Cara Instalasi

### 1. Copy File ke Project Laravel

Copy semua file sesuai strukturnya ke dalam project Laravel 11 Anda:

```bash
# Di root project Laravel Anda
cp -r laravel-blade-output/resources/views/* resources/views/
cp -r laravel-blade-output/public/* public/
```

### 2. Siapkan Gambar

Download atau export gambar-gambar dari Figma dan letakkan di folder `public/images/` dengan nama-nama berikut:

**Gambar yang diperlukan:**
- `logo-arselo.png` - Logo untuk navbar (153x53 px)
- `logo-smpn10-large.png` - Logo besar untuk hero section (483x500 px)
- `logo-smpn10.png` - Logo untuk footer (72x75 px)
- `kepala-sekolah.png` - Foto kepala sekolah (415x469 px)
- `artikel-1.jpg` sampai `artikel-6.jpg` - Gambar artikel (200x200 px)
- `prestasi-1.jpg` sampai `prestasi-3.jpg` - Gambar prestasi (348x348 px)
- `ekskul-futsal.jpg` - Gambar ekstrakurikuler futsal (1200x453 px)
- `fasilitas-basket.jpg` - Gambar fasilitas basket (1200x453 px)

### 3. Setup Route di Laravel

Tambahkan route di file `routes/web.php`:

```php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});
```

### 4. Jalankan Server Laravel

```bash
php artisan serve
```

Buka browser dan akses: `http://localhost:8000`

## 🎨 Fitur Desain

### Color Palette
- **Primary Blue**: `#408fd9`
- **Dark Blue**: `#092c4c`
- **Gray**: `#737373`
- **Light Cyan**: `#e4ffff` (background prestasi)
- **Light Gray**: `#f9f9f9` (background footer)

### Typography
- **Font**: Montserrat (Regular 400, Bold 700)
- Sudah otomatis dimuat dari Google Fonts

### Spacing & Layout
- Menggunakan CSS Variables untuk spacing yang konsisten
- Responsive design dengan breakpoints:
  - Desktop: > 1024px
  - Tablet: 768px - 1024px
  - Mobile: < 768px

## 📱 Fitur Responsif

Website sudah fully responsive dengan fitur:
- ✅ Navbar mobile dengan hamburger menu
- ✅ Grid layout yang menyesuaikan ukuran layar
- ✅ Typography yang responsif
- ✅ Touch-friendly untuk mobile

## 🔧 Fitur JavaScript

File `script.js` sudah dilengkapi dengan:
1. **Mobile Menu Toggle** - Hamburger menu untuk tampilan mobile
2. **Smooth Scrolling** - Scroll halus saat klik link navigasi
3. **Active Navigation** - Highlight menu aktif sesuai posisi scroll
4. **Lazy Loading** (opsional) - Untuk optimasi loading gambar
5. **Scroll Animations** (opsional) - Animasi saat scroll

## 🎯 Sections di Halaman Beranda

1. **Hero Section** - Sambutan utama dengan logo
2. **Sambutan Kepala Sekolah** - Foto dan sambutan
3. **Artikel** - Grid 2 kolom (6 artikel)
4. **Prestasi Siswa** - Grid 3 kolom (3 prestasi)
5. **Ekstrakurikuler** - Showcase kegiatan ekskul
6. **Fasilitas Sekolah** - Showcase fasilitas
7. **Footer** - Informasi kontak dan media sosial

## 📝 Customisasi

### Mengubah Warna
Edit file `public/css/style.css` di bagian CSS Variables:

```css
:root {
    --color-primary: #408fd9;     /* Ubah warna utama */
    --color-dark: #092c4c;        /* Ubah warna gelap */
    --color-gray: #737373;        /* Ubah warna abu-abu */
    /* ... */
}
```

### Menambah Halaman Baru
1. Buat file baru di `resources/views/pages/nama-halaman.blade.php`
2. Gunakan `@extends('layouts.main')`
3. Tambahkan route di `routes/web.php`

### Mengubah Konten
Edit langsung file blade yang sesuai:
- Navbar: `resources/views/partials/navbar.blade.php`
- Footer: `resources/views/partials/footer.blade.php`
- Beranda: `resources/views/pages/beranda.blade.php`

## 🔍 Tips Penggunaan

1. **Semantic HTML**: Kode sudah menggunakan tag HTML5 semantic (nav, section, article, footer)
2. **Clean CSS**: Tidak ada inline CSS, semua styling di file terpisah
3. **Reusable Components**: Layout dan partials dapat digunakan ulang
4. **Laravel Asset Helper**: Sudah menggunakan `{{ asset() }}` untuk load file
5. **SEO Friendly**: Struktur HTML yang baik untuk SEO

## 📞 Kontak & Informasi

Untuk pertanyaan atau modifikasi lebih lanjut, silakan sesuaikan:
- Nomor telepon di footer
- Username Instagram
- Alamat sekolah
- Konten artikel dan prestasi

## ⚡ Performance Tips

1. Compress gambar sebelum upload (gunakan TinyPNG atau ImageOptim)
2. Enable lazy loading dengan uncomment di `script.js`
3. Enable scroll animations dengan uncomment di `script.js`
4. Gunakan WebP format untuk gambar modern browsers

## 📦 Dependencies

Tidak ada dependencies eksternal! Hanya menggunakan:
- ✅ HTML5
- ✅ CSS3 (dengan Variables)
- ✅ JavaScript Vanilla
- ✅ Google Fonts (Montserrat)
- ✅ Laravel Blade Templating

---

**Selamat menggunakan! Semoga website SMPN 10 Jember sukses!** 🎓
