@extends('layouts.master')

@section('title', 'Create Order - ' . config('app.name'))
@section('meta_description', 'Create a new order in the system.')
@section('meta_keywords', 'create order, new order, order management')

@section('content')
<div id="checkout">
  <div class="max-w-4xl mx-auto">
    <a href="{{ route('cart.index') }}" class="mb-2.5 flex items-center text-blue-600 hover:text-blue-800">
      <i class="fas fa-arrow-left mr-2"></i>
      Back to Cart
    </a>
    <h2 class="text-2xl font-bold text-gray-900 mb-8">Checkout</h2>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
      <!-- Billing Information -->
      <div class="bg-white rounded-lg border border-slate-100 shadow-sm p-6">
        <h3 class="text-xl font-semibold mb-4">Informasi Penagihan</h3>
        <form id="checkoutForm">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                    <input type="text" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                    <input type="text" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                <input type="text" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">City</label>
                    <input type="text" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">ZIP Code</label>
                    <input type="text" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
            </div>
            <h3 class="text-lg font-semibold mb-4 mt-6">Payment Information</h3>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Card Number</label>
                <input type="text" placeholder="1234 5678 9012 3456" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
            <div class="grid grid-cols-2 gap-4 mb-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Expiry Date</label>
                    <input type="text" placeholder="MM/YY" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">CVV</label>
                    <input type="text" placeholder="123" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
            </div>
        </form>
      </div>
      <!-- Order Summary -->
      <div class="bg-white rounded-lg border border-slate-100 shadow-sm p-6">
        <h3 class="text-xl font-semibold mb-4">Ringkasan Pesanan</h3>
        <div class="space-y-4">
          <div class="flex justify-between items-center">
            <div>
              <div class="font-medium">Produk 1</div>
              <div class="text-sm text-gray-600">Qty: 1</div>
            </div>
            <div>Rp 100.000</div>
          </div>
        </div>
        <div class="border-t border-slate-100 pt-4 mt-4 space-y-2">
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
                <span>${
                  shipping === 0 ? 'FREE' : '$' + shipping.toFixed(2)
                }</span>
            </div>
            <div class="border-t border-slate-100 pt-2">
                <div class="flex justify-between font-bold text-lg">
                    <span>Total:</span>
                    <span>$${total.toFixed(2)}</span>
                </div>
            </div>
        </div>
      </div>
    </div>
    <div>
      <a href="{{route('checkout.success')}}">
        <button id="submitOrder" class="mt-6 w-full bg-blue-600 text-white font-semibold py-2 px-8 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
          Submit Order
        </button>
      </a>
    </div>
  </div>
</div>
@endsection