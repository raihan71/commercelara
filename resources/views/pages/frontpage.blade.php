@extends('layouts.master')

@section('title', 'Welcome to Commercelara')

@section('meta_description', 'Discover the best products and deals at Commercelara.')

@section('meta_keywords', 'ecommerce, online shopping, deals, products')

@section('content')

<!-- Frontpage Content -->
<div id="home">
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-blue-300 text-white p-8 rounded-xl shadow-lg md:p-12 mb-8">
        <div class="max-w-3xl">
            <h1 class="text-3xl md:text-5xl font-bold mb-4">Gratis Ongkir Setiap Hari</h1>
            <p class="text-xl mb-6 opacity-90">Belanja sekarang dan nikmati gratis ongkir setiap hari di Commercelara!</p>
            <button class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">Belanja Sekarang</button>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="mb-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Kategori Pilihan</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ([1,2,3,4] as $category)
                <a class="category-card border border-slate-100 bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow cursor-pointer text-center">
                    <i class="fas fa-tshirt text-3xl text-purple-600 mb-3"></i>
                    <h3 class="font-semibold">Pakaian</h3>
                </a>
            @endforeach
        </div>
    </section>

    <!-- Filter Section -->
    <div class="pt-1 mb-6 flex flex-wrap gap-2.5">
        <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            <option value="all">Semua Harga</option>
            <option value="under50">Di bawah Rp50.000</option>
            <option value="50to100">Rp50.000 - Rp100.000</option>
            <option value="100to200">Rp100.000 - Rp200.000</option>
            <option value="above200">Di atas Rp200.000</option>
        </select>
        <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            <option value="all">Semua Kategori</option>
            <option value="clothing">Pakaian</option>
            <option value="electronics">Elektronik</option>
            <option value="home">Perlengkapan Rumah</option>
        </select>
        <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            <option value="all">Semua Rating</option>
            <option value="1">1 Star</option>
            <option value="2">2 Stars</option>
            <option value="3">3 Stars</option>
            <option value="4">4 Stars</option>
            <option value="5">5 Stars</option>
        </select>
    </div>

    <!-- Featured Products Section -->
    <section>
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Produk Pilihan</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ([1,2,3,4,5,6] as $product)
                <div class="bg-white border border-slate-100 shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden rounded-lg group">
                    <div class="relative overflow-hidden">
                        <span class="absolute top-2 right-2 bg-blue-500 text-white text-xs font-semibold px-2 py-1 rounded">Diskon 20%</span>
                        <img src="{{ asset('images/urban-jacket.jpeg') }}" alt="Product Image" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <a href="#" class="bg-white text-gray-900 px-4 py-2 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:bg-gray-100">Lihat Detail</a>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 mb-1">Urban Jacket</h3>
                        <p class="text-gray-600 text-sm mb-2">Fashion</p>
                        <div class="flex items-center mb-2">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star-half-alt text-yellow-400"></i>
                            <span class="text-gray-500 text-sm ml-1">(4.5)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-xl font-bold text-blue-600">Rp150.000</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition-colors">+ Keranjang</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

</div>

@endsection

