@extends('layouts.main')

@section('title', 'Tentang Kami - Profil Sekolah - SMPN 10 Jember')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <div class="page-header-container">
        <h1>Profil Sekolah</h1>
    </div>
</section>

@include('partials.school-hero')

<!-- Profile Content -->
<section class="profile-content">
    <div class="container">
        
        <!-- Identitas Sekolah -->
        <div class="profile-card">
            <h3 class="profile-card-title">Identitas Sekolah</h3>
            <div class="profile-table">
                <div class="profile-row">
                    <div class="profile-label">Nama Sekolah</div>
                    <div class="profile-value">SMP Negeri 10 Jember</div>
                </div>
                <div class="profile-row">
                    <div class="profile-label">No. Statistik Sekolah</div>
                    <div class="profile-value">221052403001</div>
                </div>
                <div class="profile-row">
                    <div class="profile-label">Status Sekolah</div>
                    <div class="profile-value">Negeri</div>
                </div>
                <div class="profile-row">
                    <div class="profile-label">Kelompok Sekolah</div>
                    <div class="profile-value">Umum</div>
                </div>
            </div>
        </div>

        <!-- Lokasi & Alamat -->
        <div class="profile-card">
            <h3 class="profile-card-title">Lokasi & Alamat</h3>
            <div class="profile-table">
                <div class="profile-row">
                    <div class="profile-label">Alamat</div>
                    <div class="profile-value">Jl. Nusa Indah No. 25</div>
                </div>
                <div class="profile-row">
                    <div class="profile-label">Desa / Kelurahan</div>
                    <div class="profile-value">Jember Lor</div>
                </div>
                <div class="profile-row">
                    <div class="profile-label">Kecamatan</div>
                    <div class="profile-value">Patrang</div>
                </div>
                <div class="profile-row">
                    <div class="profile-label">Kabupaten</div>
                    <div class="profile-value">Jember</div>
                </div>
                <div class="profile-row">
                    <div class="profile-label">Provinsi</div>
                    <div class="profile-value">Jawa Timur</div>
                </div>
                <div class="profile-row">
                    <div class="profile-label">Kode Pos</div>
                    <div class="profile-value">68118</div>
                </div>
                <div class="profile-row">
                    <div class="profile-label">Telepon</div>
                    <div class="profile-value">(0331) 485 223</div>
                </div>
            </div>
        </div>

        <!-- Legalitas & Akreditasi -->
        <div class="profile-card">
            <h3 class="profile-card-title">Legalitas & Akreditasi</h3>
            <div class="profile-table">
                <div class="profile-row">
                    <div class="profile-label">Akreditasi</div>
                    <div class="profile-value">A</div>
                </div>
                <div class="profile-row">
                    <div class="profile-label">No. SK</div>
                    <div class="profile-value">0268/0/1991</div>
                </div>
                <div class="profile-row">
                    <div class="profile-label">Tanggal Peresmian</div>
                    <div class="profile-value">19 Mei 1991</div>
                </div>
                <div class="profile-row">
                    <div class="profile-label">Penerbit SK</div>
                    <div class="profile-value">Menteri Pendidikan dan Kebudayaan RI</div>
                </div>
                <div class="profile-row">
                    <div class="profile-label">Organisasi Penyelenggara</div>
                    <div class="profile-value">Pemerintah dan Masyarakat</div>
                </div>
            </div>
        </div>

        <!-- Operasional Sekolah -->
        <div class="profile-card">
            <h3 class="profile-card-title">Operasional Sekolah</h3>
            <div class="profile-table">
                <div class="profile-row">
                    <div class="profile-label">Kegiatan Belajar</div>
                    <div class="profile-value">Pagi</div>
                </div>
                <div class="profile-row">
                    <div class="profile-label">Bangunan Sekolah</div>
                    <div class="profile-value">Milik Sendiri</div>
                </div>
                <div class="profile-row">
                    <div class="profile-label">Lokasi Sekolah</div>
                    <div class="profile-value">Perkotaan</div>
                </div>
                <div class="profile-row">
                    <div class="profile-label">Keanggotaan Rayon</div>
                    <div class="profile-value">3 Sekolah</div>
                </div>
            </div>
        </div>

        <!-- Jarak & Wilayah -->
        <div class="profile-card">
            <h3 class="profile-card-title">Jarak & Wilayah</h3>
            <div class="profile-table">
                <div class="profile-row">
                    <div class="profile-label">Jarak ke Pusat Kecamatan</div>
                    <div class="profile-value">± 5 km</div>
                </div>
                <div class="profile-row">
                    <div class="profile-label">Jarak ke Pusat Otda</div>
                    <div class="profile-value">± 2 km</div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
