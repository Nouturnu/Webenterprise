<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inaklug - Belajar di Luar Negeri</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- File CSS Utama -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header>
        <div class="container header-container">
            <!-- Logo -->
            <a href="/" class="logo">
                <img src="{{ asset('images/inaklug.png') }}" alt="Inaklug Logo">
                <span>inaklug</span>
            </a>

            <!-- Navigasi Utama -->
            <nav class="main-nav">
                <ul>
                    <li><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                    <li><a href="/tentang-kami" class="{{ Request::is('tentang-kami') ? 'active' : '' }}">Tentang Kami</a></li>
                    <li><a href="/layanan-kami" class="{{ Request::is('layanan-kami') ? 'active' : '' }}">Layanan Kami</a></li>
                    <li><a href="/artikel" class="{{ Request::is('artikel') ? 'active' : '' }}">Artikel</a></li>
                    <li><a href="/hubungi-kami" class="{{ Request::is('hubungi-kami') ? 'active' : '' }}">Hubungi Kami</a></li>
                </ul>
            </nav>

            <!-- Bagian Kanan Header -->
            <div class="header-right">
                <div class="search-bar">
                    <input type="text" placeholder="Ketik pencarian...">
                </div>
                <a href="#" class="btn btn-primary">DAFTAR ONLINE</a>
            </div>

            <!-- Tombol Hamburger (hanya muncul di mobile) -->
            <button class="mobile-nav-toggle" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <main>
        <!-- Konten dari file (home, tentang-kami, dll) akan diisi di sini -->
        @yield('content')
    </main>

    <!-- =======================================================
        BAGIAN KONTAK (SEBELUM FOOTER) - BARU DIPISAHKAN
    ======================================================= -->
    <section class="content-section contact-section text-center">
        <div class="container">
            <h2 class="section-title contact-title">HUBUNGI KAMI</h2>
            <h3>KANTOR PUSAT</h3>
            <p>Gedung Ir. H. M. Suseno - JL. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
            <p>Phone : (+62 21) 398 38706 - Fax: (+62 21) 316 1701</p>
            <p>Hotline: +6281519040071 / +62811998167</p>
            <div class="contact-buttons">
                <!-- Tombol LOKASI KAMI (Gradien) -->
                <a href="#" class="btn btn-tertiary">LOKASI KAMI</a>
                <!-- Tombol KIRIM PESAN (Outline Ungu) -->
                <a href="/hubungi-kami" class="btn btn-outline-contact">KIRIM PESAN</a>
            </div>
        </div>
    </section>

    <!-- =======================================================
        FOOTER (HANYA COPYRIGHT)
    ======================================================= -->
    <footer class="site-footer">
        <div class="container">
            <p>Copyright © 2020 inaklug indonesia Hak cipta dilindungi undang-undang</p>
        </div>
    </footer>

    <!-- Script Google reCAPTCHA v2 (Hanya akan dimuat jika halaman membutuhkannya) -->
    @stack('scripts')
    
</body>
</html>