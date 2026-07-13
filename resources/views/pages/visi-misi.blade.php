@extends('layouts.main')

@section('title', 'Visi & Misi - SMPN 10 Jember')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <div class="page-header-container">
        <h1>Visi & Misi</h1>
    </div>
</section>

@include('partials.school-hero')

<!-- Visi Misi Content -->
<section class="profile-content">
    <div class="container">
        
        <!-- Visi -->
        <div class="visi-card">
            <h3 class="visi-card-title">Visi</h3>
            <div class="visi-content">
                <p>Terwujudnya Insan yang Berprestasi dan Terpuji dalam Budi Pekerti</p>
            </div>
        </div>

        <!-- Misi -->
        <div class="profile-card">
            <h3 class="profile-card-title">Misi</h3>
            <div class="misi-content">
                <ol>
                    <li>Mewujudkan Pengembangan Kurikulum Satuan Pendidikan</li>
                    <li>Mewujudkan Peningkatan Perolehan hasil kelulusan</li>
                    <li>Mewujudkan Peningkatan Kualitas Tenaga Pendidikan</li>
                    <li>Mewujudkan Pengembangan Fasilitas Pendidikan</li>
                    <li>Mewujudkan Pengembangan Pengelolaan Pendidikan yang Sistematis dan Berkualitas</li>
                    <li>Mewujudkan Peningkatan Biaya Operasional sesuai dengan SNP yang Berasal dari Berbagai Sumber</li>
                    <li>Mewujudkan Pelaksanaan Penilaian Pembelajaran yang Berkualitas</li>
                    <li>Mewujudkan Pelaksanaan Kegiatan Keagamaan</li>
                </ol>
            </div>
        </div>

    </div>
</section>

@endsection
