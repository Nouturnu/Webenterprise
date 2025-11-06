{{-- Menggunakan bingkai (Header & Footer) dari app.blade.php --}}
@extends('layouts.app')

{{-- Mengisi bagian 'content' --}}
@section('content')

    <!-- Bagian 1: Hero Image Halaman "Artikel" (Ini tetap sama) -->
    <section class="page-hero article-hero" style="background-image: url('{{ asset('images/041891800_1606226798-tra-nguyen-TVSRWmnW8Us-unsplash.jpg') }}');">
        <div class="container">
            <div class="article-hero-content">
                <span class="hero-kicker">TIPS</span>
                <h1>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h1>
            </div>
        </div>
    </section>

    <!-- Bagian 2: Konten Artikel (HIGHLIGHT + LIST) -->
    <section class="content-section bg-light">
        <div class="container">

            <!-- === BAGIAN BARU: ARTIKEL HIGHLIGHT === -->
            <div class="highlight-articles-grid">
                
                <!-- Highlight Artikel 1 -->
                <a href="#" class="highlight-article-card">
                    {{-- Ganti 'tupai.png' dengan nama file gambar Anda --}}
                    <img src="{{ asset('images/tupai.png') }}" alt="Artikel highlight 1">
                    <div class="article-content">
                        <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
                    </div>
                </a>

                <!-- Highlight Artikel 2 -->
                <a href="#" class="highlight-article-card">
                    {{-- Ganti 'becak.png' dengan nama file gambar Anda --}}
                    <img src="{{ asset('images/becak.png') }}" alt="Artikel highlight 2">
                    <div class="article-content">
                        <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
                    </div>
                </a>

            </div>
            <!-- === AKHIR BAGIAN BARU === -->

            <!-- Garis Pemisah -->
            <hr class="article-divider">
            
            <!-- Judul List Artikel -->
            <h2 class="section-title text-left article-list-title">ARTIKEL TERBARU</h2>

            <!-- KONTENER LIST ARTIKEL (Sudah ada dari langkah sebelumnya) -->
            <div class="article-list-container">
                
                <!-- Artikel List Item 1 -->
                <a href="#" class="article-list-item">
                    <div class="article-list-image">
                        <img src="{{ asset('images/artikel1.jpg') }}" alt="Ilustrasi studi di Jerman">
                    </div>
                    <div class="article-list-content">
                        <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
                        <p class="article-date">Selasa, 18 Feb 2020 12:01 WIB</p>
                    </div>
                </a>
                
                <!-- Artikel List Item 2 -->
                <a href="#" class="article-list-item">
                    <div class="article-list-image">
                        <img src="{{ asset('images/artikel2.jpg') }}" alt="Gedung Parlemen Uni Eropa">
                    </div>
                    <div class="article-list-content">
                        <h3>Uni Eropa Menghadapi Virus Corona</h3>
                        <p class="article-date">Selasa, 18 Feb 2020 12:01 WIB</p>
                    </div>
                </a>

                <!-- Artikel List Item 3 -->
                <a href="#" class="article-list-item">
                    <div class="article-list-image">
                        <img src="{{ asset('images/bahasajerman.png') }}" alt="Pemandangan pegunungan Jerman">
                    </div>
                    <div class="article-list-content">
                        <h3>Belajar Bahasa Jerman Bersama Goethe Institut</h3>
                        <p class="article-date">Selasa, 18 Feb 2020 12:01 WIB</p>
                    </div>
                </a>

                <!-- Artikel List Item 4 -->
                <a href="#" class="article-list-item">
                    <div class="article-list-image">
                        <img src="{{ asset('images/gatescambride.png') }}" alt="Pantai saat matahari terbenam">
                    </div>
                    <div class="article-list-content">
                        <h3>Apa Itu Gates Cambridge? Yuk Cari Tahu</h3>
                        <p class="article-date">Selasa, 18 Feb 2020 12:01 WIB</p>
                    </div>
                </a>

                <!-- Artikel List Item 5 -->
                <a href="#" class="article-list-item">
                    <div class="article-list-image">
                        <img src="{{ asset('images/chinatown.png') }}" alt="Chinatown">
                    </div>
                    <div class="article-list-content">
                        <h3>Berwisata ke Pecinan Terkenal di Dunia</h3>
                        <p class="article-date">Selasa, 18 Feb 2020 12:01 WIB</p>
                    </div>
                </a>

            </div> <!-- Akhir .article-list-container -->

            <!-- PAGINATION (Sudah ada dari langkah sebelumnya) -->
            <nav class="pagination-container" aria-label="Page navigation">
                <ul>
                    <li><a href="#" class="arrow disabled">&laquo;</a></li>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#" class="arrow">&raquo;</a></li>
                </ul>
            </nav>

        </div>
    </section>

@endsection

