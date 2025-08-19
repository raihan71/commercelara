@extends('layouts.master')

@section('title', 'Order Completed - ' . config('app.name'))
@section('meta_description', 'Your order has been successfully completed.')
@section('meta_keywords', 'order completed, order success, order confirmation')

@section('content')
<div id="orderSuccess" class="mt-6">
  <div class="max-w-xl mx-auto bg-white rounded-lg shadow-md p-6 text-center">
    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
        <i class="fas fa-check text-2xl text-green-600"></i>
    </div>
    <h2 class="text-2xl font-bold text-gray-900 mb-2">Pesanan kamu berhasil</h2>
    <p class="text-gray-600 mb-6">Terima kasih sudah berbelanja dari rumah, kami proses segera ya.</p>
    <a href="{{url('/')}}">
      <button class="px-8 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
        Belanja lagi
      </button>
    </a>
  </div>
</div>
@endsection