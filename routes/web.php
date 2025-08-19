<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.frontpage');
});

Route::get('/product/{id}', function ($id) {
    return view('pages.product.detail', ['id' => $id]);
})->name('product.show');

Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart.index');

Route::get('/checkout', function () {
    return view('pages.order.create');
})->name('checkout.index');

Route::get('/checkout/success', function () {
    return view('pages.order.finish');
})->name('checkout.success');

Route::get('/search', function () {
    return 'hello';
})->name('search');
