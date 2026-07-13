# Checklist Gambar yang Diperlukan

Sebelum website dapat berjalan dengan sempurna, Anda perlu menyiapkan gambar-gambar berikut dan meletakkannya di folder `public/images/`.

## 📸 Daftar Gambar

### Logo & Branding
- [ ] `logo-arselo.png` - Logo "WE ARE ARSELO" untuk navbar
  - Ukuran: 153 x 53 px
  - Format: PNG dengan background transparan

- [ ] `logo-smpn10-large.png` - Logo SMPN 10 Jember (besar) untuk hero section
  - Ukuran: 483 x 500 px
  - Format: PNG dengan background transparan

- [ ] `logo-smpn10.png` - Logo SMPN 10 Jember (kecil) untuk footer
  - Ukuran: 72 x 75 px
  - Format: PNG dengan background transparan

### Foto Kepala Sekolah
- [ ] `kepala-sekolah.png` - Foto Bu Susy (Kepala Sekolah)
  - Ukuran: 415 x 469 px (atau lebih tinggi)
  - Format: PNG atau JPG
  - Catatan: Foto akan ditampilkan dengan background biru di bawah

### Artikel (6 gambar)
- [ ] `artikel-1.jpg` - Gambar artikel 1
- [ ] `artikel-2.jpg` - Gambar artikel 2
- [ ] `artikel-3.jpg` - Gambar artikel 3
- [ ] `artikel-4.jpg` - Gambar artikel 4
- [ ] `artikel-5.jpg` - Gambar artikel 5
- [ ] `artikel-6.jpg` - Gambar artikel 6
  - Ukuran: Minimal 200 x 200 px (square/persegi)
  - Format: JPG atau PNG
  - Catatan: Gambar akan di-crop menjadi 200x200px

### Prestasi Siswa (3 gambar)
- [ ] `prestasi-1.jpg` - Juara 1 Lomba Fashion
- [ ] `prestasi-2.jpg` - Juara 2 English Speech
- [ ] `prestasi-3.jpg` - Medali Perak Matematika
  - Ukuran: Minimal 348 x 348 px (square/persegi)
  - Format: JPG atau PNG
  - Catatan: Gunakan aspect ratio 1:1

### Ekstrakurikuler
- [ ] `ekskul-futsal.jpg` - Foto kegiatan sepak bola/futsal
  - Ukuran: Minimal 1200 x 453 px
  - Format: JPG
  - Catatan: Landscape dengan overlay gelap + teks putih

### Fasilitas
- [ ] `fasilitas-basket.jpg` - Foto lapangan basket
  - Ukuran: Minimal 1200 x 453 px
  - Format: JPG
  - Catatan: Landscape dengan overlay gelap + teks putih

## 🎯 Tips Menyiapkan Gambar

### Optimasi Gambar
1. **Compress gambar** untuk mempercepat loading:
   - Gunakan TinyPNG (https://tinypng.com/)
   - Atau ImageOptim untuk Mac
   - Target ukuran: < 200KB per gambar

2. **Format yang disarankan**:
   - Logo: PNG (transparan)
   - Foto: JPG (kualitas 80-85%)
   - Icon: SVG (jika ada)

### Dimensi Gambar
- Gunakan minimal ukuran yang disebutkan di atas
- Untuk Retina/HD display, gunakan 2x ukuran
- Pastikan aspect ratio sesuai

### Sumber Gambar
- **Export dari Figma**: File → Export → pilih format dan scale
- **Ambil dari desain**: Klik kanan pada gambar → Export
- **Foto asli**: Dari dokumentasi kegiatan sekolah

## ⚡ Cara Export dari Figma

1. Buka file Figma desain website
2. Pilih layer/frame gambar yang ingin di-export
3. Di panel kanan, scroll ke bawah ke bagian "Export"
4. Klik "+ Add export settings"
5. Pilih format (PNG untuk logo, JPG untuk foto)
6. Pilih scale (1x, 2x, atau custom)
7. Klik "Export [nama-file]"
8. Rename file sesuai dengan nama di checklist ini
9. Letakkan di folder `public/images/`

## 🔄 Placeholder Sementara

Jika gambar belum siap, Anda bisa gunakan placeholder:
- https://placehold.co/ - Untuk ukuran custom
- https://picsum.photos/ - Untuk foto random

Contoh:
```
https://placehold.co/200x200
https://picsum.photos/200/200
```

## ✅ Verifikasi

Setelah semua gambar siap:
1. Check semua file ada di `public/images/`
2. Check nama file sesuai dengan list
3. Check ukuran file tidak terlalu besar (< 500KB)
4. Refresh browser dan lihat hasilnya
5. Test di mobile/tablet untuk memastikan responsive

---

**Catatan**: Jika ada gambar yang hilang, browser akan menampilkan broken image icon. Check console browser untuk error "404 Not Found" pada gambar.
