@extends('layouts.app')

@section('title', 'SR12 Herbal Kosmetik — Rawat Diri, Mulai dari yang Alami')
@section('description', 'Temukan produk SR12 untuk skincare, body care, kosmetik, dan herbal.')

@section('content')
<section class="hero">
    <div class="container hero-grid">
        <div class="hero-copy">
            <span class="eyebrow"><span></span> Pilihan Perawatan SR12</span>
            <h1>Rawat Diri,<br><em>Mulai dari yang Alami.</em></h1>
            <p>Temukan rangkaian produk SR12 untuk menemani kebutuhan skincare, body care, kosmetik, dan herbal sehari-hari.</p>
            <div class="hero-buttons">
                <a href="{{ route('products.index') }}" class="btn btn-primary">Belanja Sekarang <i data-lucide="arrow-up-right"></i></a>
                <a href="#produk" class="btn btn-outline">Jelajahi Produk</a>
            </div>
            <div class="hero-trust">
                <div class="trust-item"><strong>100+</strong><span>Pilihan Produk</span></div>
                <div class="trust-item"><strong>SR12</strong><span>Brand Indonesia</span></div>
                <div class="trust-item"><strong>Easy</strong><span>Untuk Dipilih</span></div>
            </div>
        </div>

        <div class="hero-visual">
            <div class="hero-orb"></div>
            <div class="hero-card hero-card-back"></div>
            <div class="hero-card hero-card-main">
                <div class="hero-product-placeholder">
                    <span>SR12</span>
                    <small>PRODUCT<br>COLLECTION</small>
                </div>
            </div>
            <div class="floating-note">
                <i data-lucide="sparkles"></i>
                <span><strong>Daily Care</strong><small>Temukan favoritmu</small></span>
            </div>
        </div>
    </div>
</section>

<section class="category-strip" id="kategori">
    <div class="container">
        <div class="section-heading compact">
            <div>
                <span class="eyebrow">Jelajahi</span>
                <h2>Kategori Pilihan</h2>
            </div>
            <a href="{{ route('products.index') }}" class="text-link">Lihat semua <i data-lucide="arrow-up-right"></i></a>
        </div>

        <div class="category-grid">
            <a href="{{ route('products.index') }}?category=Skincare" class="category-card category-green">
                <div><span class="category-number">01</span><h3>Skincare</h3><p>Perawatan wajah harian</p></div>
                <i data-lucide="arrow-up-right"></i>
            </a>
            <a href="{{ route('products.index') }}?category=Body%20Care" class="category-card category-cream">
                <div><span class="category-number">02</span><h3>Body Care</h3><p>Rawat kulit tubuh</p></div>
                <i data-lucide="arrow-up-right"></i>
            </a>
            <a href="{{ route('products.index') }}?category=Kosmetik" class="category-card category-pink">
                <div><span class="category-number">03</span><h3>Kosmetik</h3><p>Tampil percaya diri</p></div>
                <i data-lucide="arrow-up-right"></i>
            </a>
            <a href="{{ route('products.index') }}?category=Herbal" class="category-card category-gold">
                <div><span class="category-number">04</span><h3>Herbal</h3><p>Pilihan untuk keseharian</p></div>
                <i data-lucide="arrow-up-right"></i>
            </a>
        </div>
    </div>
</section>

<section class="products-section" id="produk">
    <div class="container">
        <div class="section-heading">
            <div>
                <span class="eyebrow">Pilihan Favorit</span>
                <h2>Produk Terlaris</h2>
                <p>Temukan produk yang paling banyak dicari dan cocok untuk kebutuhan harianmu.</p>
            </div>
            <div class="carousel-controls">
                <button type="button" data-scroll-left aria-label="Produk sebelumnya"><i data-lucide="arrow-left"></i></button>
                <button type="button" data-scroll-right aria-label="Produk berikutnya"><i data-lucide="arrow-right"></i></button>
            </div>
        </div>

        <div class="product-scroller" data-product-scroller>
            @forelse($products as $product)
                <article class="product-card">
                    <a href="{{ route('products.show', $product->slug) }}" class="product-image">
                        @if($product->badge)
                            <span class="product-badge">{{ $product->badge }}</span>
                        @endif
                        @if($product->image && file_exists(public_path($product->image)))
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" loading="lazy">
                        @else
                            <div class="image-placeholder"><span>SR12</span><small>{{ strtoupper($product->category) }}</small></div>
                        @endif
                        <span class="quick-view">Lihat Produk <i data-lucide="arrow-up-right"></i></span>
                    </a>
                    <div class="product-info">
                        <span class="product-category">{{ $product->category }}</span>
                        <h3><a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a></h3>
                        <div class="product-price">
                            <strong>Rp {{ number_format($product->price, 0, ',', '.') }}</strong>
                            @if($product->old_price)
                                <del>Rp {{ number_format($product->old_price, 0, ',', '.') }}</del>
                            @endif
                        </div>
                    </div>
                </article>
            @empty
                <div class="empty-products">Belum ada produk.</div>
            @endforelse
        </div>

        <div class="swipe-hint"><i data-lucide="move-horizontal"></i> Geser untuk melihat produk lainnya</div>
    </div>
</section>

<section class="feature-banner">
    <div class="container feature-inner">
        <div>
            <span class="eyebrow light">Temukan pilihanmu</span>
            <h2>Satu tempat untuk kebutuhan perawatanmu.</h2>
            <p>Jelajahi berbagai kategori dan temukan produk yang sesuai dengan kebutuhan sehari-hari.</p>
            <a href="{{ route('products.index') }}" class="btn btn-light">Lihat Semua Produk <i data-lucide="arrow-right"></i></a>
        </div>
        <div class="feature-shapes">
            <div class="shape shape-one">SR12</div>
            <div class="shape shape-two">CARE</div>
            <div class="shape shape-three">NATURAL</div>
        </div>
    </div>
</section>

<section class="about-section" id="tentang">
    <div class="container about-grid">
        <div class="about-image">
            <div class="about-image-inner">
                <span>SR12</span>
                <small>HERBAL<br>KOSMETIK</small>
            </div>
            <div class="about-stamp"><i data-lucide="leaf"></i><span>Made for<br>Everyday Care</span></div>
        </div>
        <div class="about-copy">
            <span class="eyebrow">Tentang SR12</span>
            <h2>Perawatan yang dekat dengan kebutuhan sehari-hari.</h2>
            <p>SR12 hadir dengan beragam pilihan produk untuk membantu menemani rutinitas perawatan dan gaya hidup sehari-hari.</p>
            <div class="about-points">
                <div><i data-lucide="check"></i><span>Pilihan produk beragam</span></div>
                <div><i data-lucide="check"></i><span>Mudah ditemukan dan dipesan</span></div>
                <div><i data-lucide="check"></i><span>Dikembangkan untuk kebutuhan harian</span></div>
            </div>
            <a href="#" class="text-link">Kenali SR12 lebih dekat <i data-lucide="arrow-up-right"></i></a>
        </div>
    </div>
</section>

<section class="article-section" id="artikel">
    <div class="container">
        <div class="section-heading">
            <div>
                <span class="eyebrow">Insight & Inspirasi</span>
                <h2>Artikel Terbaru</h2>
            </div>
            <a href="#" class="text-link">Lihat semua <i data-lucide="arrow-up-right"></i></a>
        </div>
        <div class="article-grid">
            <article class="article-card article-large">
                <div class="article-image"><span>SR12 JOURNAL</span></div>
                <div class="article-body">
                    <span>SKINCARE</span>
                    <h3>Rutinitas sederhana untuk merawat kulit setiap hari</h3>
                    <a href="#">Baca artikel <i data-lucide="arrow-right"></i></a>
                </div>
            </article>
            <article class="article-card">
                <div class="article-image tone-two"><span>SR12 JOURNAL</span></div>
                <div class="article-body">
                    <span>BODY CARE</span>
                    <h3>Kenapa perawatan tubuh juga penting?</h3>
                    <a href="#">Baca artikel <i data-lucide="arrow-right"></i></a>
                </div>
            </article>
            <article class="article-card">
                <div class="article-image tone-three"><span>SR12 JOURNAL</span></div>
                <div class="article-body">
                    <span>HERBAL</span>
                    <h3>Menjaga rutinitas sehat di tengah aktivitas</h3>
                    <a href="#">Baca artikel <i data-lucide="arrow-right"></i></a>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="newsletter-section">
    <div class="container newsletter-box">
        <div>
            <span class="eyebrow">Stay Connected</span>
            <h2>Dapatkan kabar terbaru dari SR12.</h2>
            <p>Info produk, artikel, dan penawaran terbaru langsung ke emailmu.</p>
        </div>
        <form class="newsletter-form">
            <input type="email" placeholder="Masukkan email kamu">
            <button type="submit">Daftar <i data-lucide="arrow-right"></i></button>
        </form>
    </div>
</section>
@endsection
