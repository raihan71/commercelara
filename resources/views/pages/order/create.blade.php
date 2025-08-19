@extends('layouts.master')

@section('title', 'Create Order - ' . config('app.name'))
@section('meta_description', 'Create a new order in the system.')
@section('meta_keywords', 'create order, new order, order management')

@section('content')
<div id="checkout">
  <div class="max-w-4xl mx-auto">
    <h2 class="text-2xl font-bold text-gray-900 mb-8">Checkout</h2>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
      <!-- Billing Information -->
      <div class="bg-white rounded-lg border border-slate-100 shadow-sm p-6">
        <h3 class="text-xl font-semibold mb-4">Informasi Penagihan</h3>
        <form action="" method="POST">
          @csrf
          <div class="space-y-4">
            <div>
              <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
              <input type="text" id="name" name="name" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>
            <div>
              <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
              <input type="email" id="email" name="email" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>
            <div>
              <label for="address" class="block text-sm font-medium text-gray-700">Alamat</label>
              <textarea id="address" name="address" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
            </div>
            <div>
              <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
              <input type="tel" id="phone" name="phone" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>
          </div>
          <button type="submit" class="mt-6 bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition-colors">
            Buat Pesanan
          </button>
        </form>
    </div>
  </div>
</div>
@endsection