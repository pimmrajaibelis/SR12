@extends('layouts.app')

@section('title', 'Produk — SR12 Herbal Kosmetik')

@section('content')
<section class="page-hero">
    <div class="container">
        <span class="eyebrow">Koleksi SR12</span>
        <h1>Semua Produk</h1>
        <p>Jelajahi pilihan produk SR12 untuk kebutuhan perawatan sehari-hari.</p>
    </div>
</section>

<section class="catalog-section">
    <div class="container">
        <div class="catalog-toolbar">
            <div class="filter-pills">
                <a href="{{ route('products.index') }}" class="{{ !request('category') ? 'active' : '' }}">Semua</a>
                @foreach(['Skincare', 'Body Care', 'Kosmetik', 'Herbal'] as $category)
                    <a href="{{ route('products.index', ['category' => $category]) }}" class="{{ request('category') === $category ? 'active' : '' }}">{{ $category }}</a>
                @endforeach
            </div>
        </div>

        <div class="catalog-grid">
            @foreach($products as $product)
                <article class="product-card">
                    <a href="{{ route('products.show', $product->slug) }}" class="product-image">
                        @if($product->badge)<span class="product-badge">{{ $product->badge }}</span>@endif
                        @if($product->image && file_exists(public_path($product->image)))
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" loading="lazy">
                        @else
                            <div class="image-placeholder"><span>SR12</span><small>{{ strtoupper($product->category) }}</small></div>
                        @endif
                    </a>
                    <div class="product-info">
                        <span class="product-category">{{ $product->category }}</span>
                        <h3><a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a></h3>
                        <div class="product-price"><strong>Rp {{ number_format($product->price, 0, ',', '.') }}</strong></div>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="pagination-wrap">{{ $products->links() }}</div>
    </div>
</section>
@endsection
