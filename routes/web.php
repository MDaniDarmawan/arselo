<?php

use Illuminate\Support\Facades\Route;
use App\Data\ArtikelData;

// Halaman Beranda
Route::get('/', function () {
    $artikels = ArtikelData::all();
    return view('pages.beranda', compact('artikels'));
})->name('beranda');

// Tentang Kami Section
Route::get('/tentang-kami', function () {
    return view('pages.tentang-kami');
})->name('tentang-kami');

Route::get('/visi-misi', function () {
    return view('pages.visi-misi');
})->name('visi-misi');

Route::get('/sejarah', function () {
    return view('pages.sejarah');
})->name('sejarah');

Route::get('/struktur-organisasi', function () {
    return view('pages.struktur-organisasi');
})->name('struktur-organisasi');

Route::get('/struktur-tata-usaha', function () {
    return view('pages.struktur-tata-usaha');
})->name('struktur-tata-usaha');

// Halaman Akademik - Tenaga Pendidik
Route::get('/tenaga-pendidik', function () {
    return view('pages.tenaga-pendidik');
})->name('tenaga-pendidik');

// Halaman Akademik - Prestasi Siswa
Route::get('/prestasi-siswa', function () {
    return view('pages.prestasi-siswa');
})->name('prestasi-siswa');

// Ekstrakurikuler
Route::get('/ekstrakurikuler', function () {
    return view('pages.ekstrakurikuler');
})->name('ekstrakurikuler');

// Struktur OSIS
Route::get('/struktur-osis', function () {
    return view('pages.struktur-osis');
})->name('struktur-osis');

// Artikel
Route::get('/artikel', function () {
    $artikels = ArtikelData::all();
    return view('pages.artikel', compact('artikels'));
})->name('artikel');

Route::get('/detail-artikel/{id}', function ($id) {
    $artikel = ArtikelData::find($id);
    abort_if(!$artikel,404);
    return view('pages.detail-artikel', compact('artikel'));
})->name('detail-artikel');

// Galeri Routes
Route::get('/kegiatan-sekolah', function () {
    return view('pages.kegiatan-sekolah');
})->name('kegiatan-sekolah');

Route::get('/detail-kegiatan/{id}', function ($id) {
    return view('pages.detail-kegiatan');
})->name('detail-kegiatan');

Route::get('/fasilitas', function () {
    return view('pages.fasilitas');
})->name('fasilitas');

// Kontak Route
Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');