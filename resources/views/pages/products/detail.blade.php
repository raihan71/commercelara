@extends('layouts.master')

@section('title', "$id - Commercelara")
@section('meta_description', 'Detailed view of the product with all specifications and reviews.')
@section('meta_keywords', 'product detail, ecommerce, online shopping, reviews')
@section('content')
<!-- Product Detail Page -->
<div class="container mx-auto p-6">
    <div class="flex flex-col md:flex-row gap-6">
        <!-- Product Image -->
        <div class="md:w-1/2">
            <img src="{{ asset('images/urban-jacket.jpeg') }}" alt="Product Image" class="w-full h-auto rounded-lg shadow-lg">
        </div>

        <!-- Product Info -->
        <div class="md:w-1/2">
            <h1 class="text-3xl font-bold mb-4">Product Name</h1>
            <p class="text-gray-700 mb-4">Detailed description of the product goes here. It includes all the specifications, features, and benefits of the product.</p>
            <p class="text-xl font-semibold text-blue-600 mb-4">Rp 100.000</p>
            <button class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">Add to Cart</button>
        </div>
    </div>

    <!-- Reviews Section -->
    <section class="mt-8">
        <h2 class="text-2xl font-bold mb-4">Customer Reviews</h2>
        <div class="space-y-4">
            @foreach (['Great product!', 'Very satisfied with my purchase.', 'Will buy again!'] as $review)
                <div class="border border-gray-200 p-4 rounded-lg shadow-sm">
                    <p class="text-gray-800">{{ $review }}</p>
                </div>
            @endforeach
        </div>
    </section>
    <!-- Related Products Section -->
    <section class="mt-8">
        <h2 class="text-2xl font-bold mb-4">Related Products</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ([1, 2, 3] as $relatedProduct)
                <div class="border border-gray-200 p-4 rounded-lg shadow-sm">
                    <img src="{{ asset('images/urban-jacket.jpeg') }}" alt="Related Product" class="w-full h-auto rounded-lg mb-4">
                    <h3 class="font-semibold">Related Product {{ $relatedProduct }}</h3>
                    <p class="text-gray-700 mb-2">Rp 80.000</p>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition-colors">View Details</button>
                </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
