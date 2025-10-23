{{-- 
    LANGKAH 1 (PALING PENTING): 
    Memanggil "bingkai" (app.blade.php) yang berisi Header, Footer,
    dan link ke file style.css
--}}
@extends('layouts.app')

{{-- 
    LANGKAH 2: 
    Mengisi "slot" konten dengan semua HTML khusus untuk halaman ini.
--}}
@section('content')

    <!-- Bagian 1: Hero Image Halaman "Tentang Kami" -->
    <section class="page-hero" style="background-image: url('{{ asset('images/studytour.png') }}');">
        <div class="container">
            <h1>TENTANG KAMI</h1>
        </div>
    </section>

    <!-- Bagian 2: Konten Profil, Gambar, Visi & Misi -->
    <section class="content-section">
        <div class="container about-page-content">
            
            <h2 class="profile-title">PROFIL</h2>
            
            <p class="profile-text">
                Didirikan pada tahun 2018, ini membuktikan bahwa INAKLUG merupakan konsultan pendidikan internasional yang berpengalaman, terbesar, terpercaya, dan juga memiliki jam terbang tinggi untuk melayani para anak-anak muda Indonesia untuk menuntut ilmu di berbagai negara maju dunia.
            </p>

            <!-- Grid untuk dua gambar di bawah profil -->
            <div class="profile-image-grid">
                <img src="{{ asset('images/visi.png') }}" alt="Visi Inaklug">
                <img src="{{ asset('images/misi.png') }}" alt="Misi Inaklug">
            </div>

            <!-- Bagian 3: Visi & Misi -->
            <div class="vision-mission-section">
                <!-- Kolom Visi -->
                <div class="vision-item">
                    <h3>VISI</h3>
                    <p>Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional untuk menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia masa depan yang tangguh, mandiri, dan profesional.</p>
                </div>
                <!-- Kolom Misi -->
                <div class="mission-item">
                    <h3>MISI</h3>
                    <p>Memfasilitasi siswa Indonesia untuk mengenyam pendidikan di berbagai perguruan tinggi di lebih dari 25 negara maju di dunia dengan layanan yang profesional.</p>
                    <p>Memberikan bantuan konsultasi terhadap siswa/i Indonesia dalam mempersiapkan studinya dari berbagai aspek, baik aspek sosial, budaya, maupun pendidikan.</p>
                </div>
            </div>

        </div>
    </section>

@endsection
{{-- LANGKAH 3 (PALING PENTING): Menutup "slot" konten --}}

