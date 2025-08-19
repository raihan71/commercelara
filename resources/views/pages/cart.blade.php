@extends('layouts.master')

@section('title', 'Cart - Commercelara')
@section('meta_description', 'View and manage your shopping cart items.')
@section('meta_keywords', 'cart, shopping cart, ecommerce, online shopping')

@section('content')
<div id="cart">
  <div class="bg-white rounded-lg border border-slate-100 shadow-sm p-6">
    <h2 class="text-2xl font-bold text-gray-900 mb-6">Keranjang Belanja</h2>
    <section id="cartItems">
    @if ([])
    <div class="text-center py-8">
      <i class="fas fa-shopping-cart text-4xl text-gray-400 mb-4"></i>
      <p class="text-gray-600 mb-4">Keranjang belanja masih kosong :(</p>
      <button class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition-colors">
        Mulai belanja
      </button>
    </div>
    @else
      @foreach ([1,2,3,4] as $cartItem )
        <div class="flex items-center py-4 border-b border-gray-200">
          <img src="{{asset('images/urban-jacket.jpeg')}}" alt="image-produk" class="w-16 h-16 object-cover rounded-md mr-4">
          <div class="flex-1">
              <h3 class="font-semibold text-gray-900">Product</h3>
              <p class="text-gray-600">Fashion</p>
          </div>
          <div class="flex items-center space-x-2">
              <button
                      class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-50">
                  <i class="fas fa-minus text-xs"></i>
              </button>
              <span class="w-8 text-center">1</span>
              <button
                      class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-50">
                  <i class="fas fa-plus text-xs"></i>
              </button>
          </div>
          <div class="ml-4 text-right">
              <div class="font-semibold">Rp 10.000</div>
              <button class="text-red-600 hover:text-red-800 text-sm">
                  Hapus
              </button>
          </div>
        </div>
      @endforeach
    @endif
    </section>
    <section id="cartSummary" class="mt-6 pt-6 border-t border-gray-200">
      <div class="space-y-2">
          <div class="flex justify-between">
              <span>Subtotal:</span>
              <span>$${subtotal.toFixed(2)}</span>
          </div>
          <div class="flex justify-between">
              <span>Tax:</span>
              <span>$${tax.toFixed(2)}</span>
          </div>
          <div class="flex justify-between">
              <span>Shipping:</span>
              <span>FREE</span>
          </div>
          <div class="border-t border-gray-200 pt-2">
              <div class="flex justify-between font-bold text-lg">
                  <span>Total:</span>
                  <span>$${total.toFixed(2)}</span>
              </div>
          </div>
      </div>
      <button class="w-full bg-blue-600 text-white py-3 rounded-md hover:bg-blue-700 transition-colors font-semibold mt-4">
          Proceed to Checkout
      </button>
    </section>
  </div>
</div>
@endsection