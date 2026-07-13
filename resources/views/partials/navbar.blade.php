<nav class="navbar">
    <div class="navbar-container">
        <div class="navbar-logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo-arselo.png') }}" alt="Logo SMPN 10 Jember">
            </a>
        </div>
        <div class="navbar-menu">
            <a href="{{ url('/') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Beranda</a>
            
            <!-- Dropdown Tentang Kami -->
            <div class="nav-dropdown">
                <a href="#" class="nav-link {{ Request::is('tentang-kami*') || Request::is('sejarah*') || Request::is('visi-misi*') || Request::is('struktur-organisasi*') || Request::is('struktur-tata-usaha*') ? 'active' : '' }}">
                    Tentang Kami
                    <svg class="dropdown-arrow" width="12" height="8" viewBox="0 0 12 8" fill="none">
                        <path d="M1 1L6 6L11 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <div class="dropdown-menu">
                    <a href="{{ url('/tentang-kami') }}" class="dropdown-item {{ Request::is('tentang-kami') ? 'active' : '' }}">Profil Sekolah</a>
                    <a href="{{ url('/visi-misi') }}" class="dropdown-item {{ Request::is('visi-misi') ? 'active' : '' }}">Visi & Misi</a>
                    <a href="{{ url('/sejarah') }}" class="dropdown-item {{ Request::is('sejarah') ? 'active' : '' }}">Sejarah</a>
                    <a href="{{ url('/struktur-organisasi') }}" class="dropdown-item {{ Request::is('struktur-organisasi') ? 'active' : '' }}">Struktur Organisasi</a>
                    <a href="{{ url('/struktur-tata-usaha') }}" class="dropdown-item {{ Request::is('struktur-tata-usaha') ? 'active' : '' }}">Struktur Tata Usaha</a>
                </div>
            </div>

            <!-- Dropdown Akademik -->
            <div class="nav-dropdown">
                <a href="#" class="nav-link {{ Request::is('tenaga-pendidik*') || Request::is('prestasi-siswa*') ? 'active' : '' }}">
                    Akademik
                    <svg class="dropdown-arrow" width="12" height="8" viewBox="0 0 12 8" fill="none">
                        <path d="M1 1L6 6L11 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <div class="dropdown-menu">
                    <a href="{{ url('/tenaga-pendidik') }}" class="dropdown-item {{ Request::is('tenaga-pendidik') ? 'active' : '' }}">Tenaga Pendidik</a>
                    <a href="{{ url('/prestasi-siswa') }}" class="dropdown-item {{ Request::is('prestasi-siswa') ? 'active' : '' }}">Prestasi Siswa</a>
                </div>
            </div>
            <!-- Dropdown Kesiswaan -->
            <div class="nav-dropdown">
                <a href="#" class="nav-link {{ Request::is('ekstrakurikuler*') || Request::is('struktur-osis*') || Request::is('artikel*') || Request::is('detail-artikel*') ? 'active' : '' }}">
                    Kesiswaan
                    <svg class="dropdown-arrow" width="12" height="8" viewBox="0 0 12 8" fill="none">
                        <path d="M1 1L6 6L11 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <div class="dropdown-menu">
                    <a href="{{ url('/ekstrakurikuler') }}" class="dropdown-item {{ Request::is('ekstrakurikuler') ? 'active' : '' }}">Ekstrakurikuler</a>
                    <a href="{{ url('/struktur-osis') }}" class="dropdown-item {{ Request::is('struktur-osis') ? 'active' : '' }}">Struktur OSIS</a>
                    <a href="{{ url('/artikel') }}" class="dropdown-item {{ Request::is('artikel*') ? 'active' : '' }}">Artikel</a>
                </div>
            </div>
            <!-- Dropdown Galeri -->
            <div class="nav-dropdown">
                <a href="#" class="nav-link {{ Request::is('kegiatan-sekolah*') || Request::is('detail-kegiatan*') || Request::is('fasilitas*') ? 'active' : '' }}">
                    Galeri
                    <svg class="dropdown-arrow" width="12" height="8" viewBox="0 0 12 8" fill="none">
                        <path d="M1 1L6 6L11 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <div class="dropdown-menu">
                    <a href="{{ url('/kegiatan-sekolah') }}" class="dropdown-item {{ Request::is('kegiatan-sekolah*') ? 'active' : '' }}">Kegiatan Sekolah</a>
                    <a href="{{ url('/fasilitas') }}" class="dropdown-item {{ Request::is('fasilitas') ? 'active' : '' }}">Fasilitas</a>
                </div>
            </div>
            <a href="{{ url('/kontak') }}" class="nav-link {{ Request::is('kontak') ? 'active' : '' }}">Kontak</a>
        </div>
        <button class="navbar-toggle" id="navbarToggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>
