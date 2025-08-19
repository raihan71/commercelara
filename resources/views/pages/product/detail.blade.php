@extends('layouts.master')

@section('title', "$id - Commercelara")
@section('meta_description', 'Detailed view of the product with all specifications and reviews.')
@section('meta_keywords', 'product detail, ecommerce, online shopping, reviews')
@section('content')
<!-- Product Detail Page -->
<div id="productDetail" class="container mx-auto p-6">
    <section class="flex flex-col md:flex-row gap-6">
        <!-- Product Image -->
        <div class="md:w-1/2">
            <img src="{{ asset('images/urban-jacket.jpeg') }}" alt="Product Image" class="w-full h-auto rounded-lg shadow-md">
        </div>

        <!-- Product Info -->
        <div class="md:w-1/2 bg-white rounded-lg shadow-md p-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Product Name</h1>
            <div class="flex items-center mb-4">
                <i class="fas fa-star-half-alt text-yellow-400"></i>
                <i class="fas fa-star-half-alt text-yellow-400"></i>
                <span class="text-sm text-gray-500 ml-2">(8 ulasan)</span>
            </div>
            <p class="text-gray-700 mb-6">Detailed description of the product goes here. It includes all the specifications, features, and benefits of the product.</p>
            <div class="flex items-center justify-between mb-6">
                <span class="text-3xl font-bold text-blue-600">Rp 50.000</span>
                <span class="text-sm text-gray-500">2 tersedia</span>
            </div>
            <div class="flex space-x-4">
                <a href="{{route('cart.index')}}">
                    <button
                            class="flex-1 bg-blue-600 text-white py-4 px-6 rounded-md hover:bg-blue-700 transition-colors font-semibold">
                        Tambah ke Keranjang
                    </button>
                </a>
                <a href="{{route('checkout.index')}}">
                    <button
                            class="flex-1 bg-emerald-600 text-white py-4 px-6 rounded-md hover:bg-emerald-700 transition-colors font-semibold">
                        Beli Sekarang
                    </button>
                </a>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="mt-8">
        <h2 class="text-2xl font-bold mb-4">Ulasan Teratas</h2>
        <div class="space-y-4">
            @foreach (['Great product!', 'Very satisfied with my purchase.', 'Will buy again!'] as $review)
                <div class="bg-white border border-slate-200 p-4 rounded-lg shadow-sm">
                    <p class="text-gray-800">{{ $review }}</p>
                </div>
            @endforeach
        </div>
    </section>
    <!-- Related Products Section -->
    <section class="mt-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Produk Terkait</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ([1, 2, 3] as $relatedProduct)
                <div class="bg-white border border-slate-200 p-4 rounded-lg shadow-sm">
                    <img src="{{ asset('images/urban-jacket.jpeg') }}" alt="Related Product" class="w-full h-auto rounded-lg mb-4">
                    <div class="flex flex-wrap items-center justify-between">
                        <div class="block">
                            <h3 class="font-semibold">Related Product {{ $relatedProduct }}</h3>
                            <p class="text-gray-700 mb-2">Rp 80.000</p>
                        </div>
                        <a href="{{route('product.show', $relatedProduct)}}" class="bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition-colors">Lihat Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
