<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'SR12 Herbal Kosmetik')</title>
    <meta name="description" content="@yield('description', 'Temukan pilihan produk SR12 untuk skincare, body care, kosmetik, dan herbal.')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script defer src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
    <header class="site-header" id="siteHeader">
        <div class="container nav-wrap">
        <a href="{{ route('home') }}" class="brand">
    <img src="{{ asset('assets/images/logo.png') }}" alt="SR12" class="brand-mark">
    <span>
        <strong>SR12</strong>
        <small>HERBAL KOSMETIK</small>
    </span>
</a>

            <nav class="desktop-nav">
                <a href="{{ route('home') }}">Beranda</a>
                <a href="{{ route('products.index') }}">Produk</a>
                <a href="#kategori">Kategori</a>
                <a href="#tentang">Tentang</a>
                <a href="#artikel">Artikel</a>
            </nav>

            <div class="nav-actions">
                <button class="icon-btn" type="button" data-search-toggle aria-label="Cari">
                    <i data-lucide="search"></i>
                </button>
                <a href="#kontak" class="nav-cta">Hubungi Kami</a>
                <button class="menu-btn" type="button" data-menu-toggle aria-label="Menu">
                    <i data-lucide="menu"></i>
                </button>
            </div>
        </div>

        <div class="mobile-menu" data-mobile-menu>
            <a href="{{ route('home') }}">Beranda</a>
            <a href="{{ route('products.index') }}">Produk</a>
            <a href="#kategori">Kategori</a>
            <a href="#tentang">Tentang</a>
            <a href="#artikel">Artikel</a>
            <a href="#kontak">Kontak</a>
        </div>

        <div class="search-panel" data-search-panel>
            <div class="container search-inner">
                <i data-lucide="search"></i>
                <input type="search" placeholder="Cari produk SR12..." data-product-search>
                <button type="button" data-search-toggle aria-label="Tutup pencarian"><i data-lucide="x"></i></button>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer" id="kontak">
        <div class="container footer-grid">
            <div class="footer-brand">
                <a href="{{ route('home') }}" class="brand footer-logo">
                    <span class="brand-mark">S</span>
                    <span>
                        <strong>SR12</strong>
                        <small>HERBAL KOSMETIK</small>
                    </span>
                </a>
                <p>Menemani kebutuhan perawatan dan gaya hidup dengan pilihan produk yang beragam.</p>
                <div class="socials">
                    <a href="#" aria-label="Instagram"><i data-lucide="instagram"></i></a>
                    <a href="#" aria-label="Facebook"><i data-lucide="facebook"></i></a>
                    <a href="#" aria-label="TikTok"><i data-lucide="music-2"></i></a>
                </div>
            </div>

            <div>
                <h4>Navigasi</h4>
                <a href="{{ route('products.index') }}">Produk</a>
                <a href="#kategori">Kategori</a>
                <a href="#tentang">Tentang Kami</a>
                <a href="#artikel">Artikel</a>
            </div>

            <div>
                <h4>Bantuan</h4>
                <a href="#kontak">Hubungi Kami</a>
                <a href="#">FAQ</a>
                <a href="#">Pengiriman</a>
                <a href="#">Kebijakan Privasi</a>
            </div>

            <div>
                <h4>Newsletter</h4>
                <p>Dapatkan informasi produk dan promo terbaru.</p>
                <form class="newsletter">
                    <input type="email" placeholder="Email kamu">
                    <button type="submit"><i data-lucide="arrow-right"></i></button>
                </form>
            </div>
        </div>

        <div class="container footer-bottom">
            <span>© {{ date('Y') }} SR12 Herbal Kosmetik.</span>
            <span>All rights reserved.</span>
        </div>
    </footer>

    <a class="floating-wa" href="https://wa.me/6280000000000" target="_blank" rel="noopener" aria-label="WhatsApp">
        <i data-lucide="message-circle"></i>
    </a>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (window.lucide) lucide.createIcons();
        });
    </script>
</body>
</html>
