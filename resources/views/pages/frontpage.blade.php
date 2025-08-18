@extends('layouts.master')

@section('title', 'Welcome to Commercelara')

@section('meta_description', 'Discover the best products and deals at Commercelara.')

@section('meta_keywords', 'ecommerce, online shopping, deals, products')

@section('content')

<!-- Frontpage Content -->
<div id="home">
    <section class="bg-gradient-to-r from-blue-600 to-green-700 text-white p-8 rounded-xl shadow-lg md:p-12 mb-8">
        <div class="max-w-3xl">
            <h1 class="text-3xl md:text-5xl font-bold mb-4">Gratis Ongkir Setiap Hari</h1>
            <p class="text-xl mb-6 opacity-90">Belanja sekarang dan nikmati gratis ongkir setiap hari di Commercelara!</p>
            <button class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">Belanja Sekarang</button>
        </div>
    </section>
</div>

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Welcome to Commercelara</h1>
    <p class="mb-6">Your one-stop shop for the best products and deals online.</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Example Product Card -->
        <div class="bg-white shadow-md rounded-lg p-4">
            <img src="{{ asset('images/urban-jacket.jpeg') }}" alt="Product Image" class="w-full h-48 object-cover rounded-t-lg mb-4">
            <h2 class="text-xl font-semibold mb-2">Product Name</h2>
            <p class="text-gray-700 mb-4">Short description of the product goes here.</p>
            <span class="text-lg font-bold text-green-600">$99.99</span>
        </div>
        <!-- Repeat product cards as needed -->
    </div>
    <div class="mt-8">
        <a href="" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Shop Now</a>
    </div>
</div>
@endsection

