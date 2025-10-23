<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Memanggil Google Fonts 'Poppins' -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Memanggil file CSS kita -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Inaklug - Konsultan Pendidikan</title>
</head>
<body>

    <!-- =======================================================
        HEADER (BAGIAN ATAS)
    ======================================================= -->
    <header>
        <div class="container header-container">
            <a href="/" class="logo">
                <img src="{{ asset('images/inaklug.png') }}" alt="Inaklug Logo">
                <span>inaklug</span>
            </a>
            <nav>
            <nav class="main-nav"> {{-- PASTIKAN CLASS INI DITAMBAHKAN --}}
                <ul>
                    <li><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                    <li><a href="/tentang-kami" class="{{ Request::is('tentang-kami') ? 'active' : '' }}">Tentang Kami</a></li>
                    <li><a href="/layanan-kami" class="{{ Request::is('layanan-kami') ? 'active' : '' }}">Layanan Kami</a></li>
                    <li><a href="#">Artikel</a></li>
                    <li><a href="#">Hubungi Kami</a></li>
                </ul>
            </nav>
            <div class="header-right">
                <div class="search-bar">
                    <input type="text" placeholder="Ketik pencarian...">
                </div>
                <a href="#" class="btn btn-primary">DAFTAR ONLINE</a>
            </div>
        </div>
    </header>

    <!-- =======================================================
        KONTEN UTAMA (BAGIAN TENGAH)
        Ini HARUS ada SEBELUM bagian Kontak & Footer
    ======================================================= -->
    <main>
        @yield('content')
    </main>

    <!-- =======================================================
        BAGIAN KONTAK (BAGIAN SEBELUM AKHIR)
        Ini HARUS ada SETELAH <main>
    ======================================================= -->
    <section class="contact-section">
        <div class="container text-center">
            <h2 class="section-title contact-title">HUBUNGI KAMI</h2>
            <h3>KANTOR PUSAT</h3>
            <p>Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
            <p>Phone : (+62 21) 398 38706 - Fax: (+62 21) 316 1701</p>
            <p>Hotline: +6281519040071 / +62811998167</p>
            <div class="contact-buttons">
                <a href="#" class="btn btn-tertiary">LOKASI KAMI</a>
                <a href="#" class="btn btn-outline-contact">KIRIM PESAN</a>
            </div>
        </div>
    </section>

    <!-- =======================================================
        FOOTER (BAGIAN PALING AKHIR)
        Ini HARUS ada SETELAH bagian Kontak
    ======================================================= -->
    <footer class="site-footer">
        <div class="container">
            <p>Copyright © 2020 inaklug indonesia Hak cipta dilindungi undang-undang</p>
        </div>
    </footer>

</body>
</html>

