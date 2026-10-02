@extends('layouts.app')

@section('title', $product->name . ' — SR12')

@section('content')
<section class="detail-section">
    <div class="container detail-grid">
        <div class="detail-image">
            @if($product->image && file_exists(public_path($product->image)))
                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
            @else
                <div class="image-placeholder"><span>SR12</span><small>{{ strtoupper($product->category) }}</small></div>
            @endif
        </div>
        <div class="detail-copy">
            <span class="eyebrow">{{ $product->category }}</span>
            <h1>{{ $product->name }}</h1>
            <div class="detail-price">
                <strong>Rp {{ number_format($product->price, 0, ',', '.') }}</strong>
                @if($product->old_price)<del>Rp {{ number_format($product->old_price, 0, ',', '.') }}</del>@endif
            </div>
            <p>{{ $product->description }}</p>
            <div class="detail-actions">
                <a href="https://wa.me/6280000000000?text={{ urlencode('Halo, saya ingin bertanya tentang ' . $product->name) }}" target="_blank" class="btn btn-primary">Tanya Produk <i data-lucide="message-circle"></i></a>
                <a href="{{ route('products.index') }}" class="btn btn-outline">Kembali ke Produk</a>
            </div>
        </div>
    </div>
</section>

<section class="products-section related-section">
    <div class="container">
        <div class="section-heading compact">
            <div><span class="eyebrow">Mungkin Kamu Suka</span><h2>Produk Serupa</h2></div>
        </div>
        <div class="product-scroller">
            @foreach($relatedProducts as $item)
                <article class="product-card">
                    <a href="{{ route('products.show', $item->slug) }}" class="product-image">
                        <div class="image-placeholder"><span>SR12</span><small>{{ strtoupper($item->category) }}</small></div>
                    </a>
                    <div class="product-info">
                        <span class="product-category">{{ $item->category }}</span>
                        <h3><a href="{{ route('products.show', $item->slug) }}">{{ $item->name }}</a></h3>
                        <div class="product-price"><strong>Rp {{ number_format($item->price, 0, ',', '.') }}</strong></div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endsection
