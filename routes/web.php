<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EcommerceController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/sign-up', [DashboardController::class, 'signUp'])->name('sign-up');
Route::get('/sign-in', [DashboardController::class, 'signIn'])->name('sign-in');

// Contoh tanpa middleware auth 
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::get('/mail', [MailController::class, 'index'])->name('mail');

// Ecommerce features
Route::get('/ecommerce', [EcommerceController::class, 'ecommerce'])->name('ecommerce');
Route::get('/cart', [EcommerceController::class, 'cart'])->name('cart');
Route::get('/orders', [EcommerceController::class, 'orders'])->name('orders');
Route::get('/order-details', [EcommerceController::class, 'orderDetails'])->name('order-details');

Route::get('/products', [ProductController::class, 'products'])->name('products');
Route::get('/add-product', [ProductController::class, 'addProduct'])->name('add-product');
Route::post('/add-product', [ProductController::class, 'storeProduct'])->name('create-product');
Route::get('/edit-product', [ProductController::class, 'editProduct'])->name('edit-product');
Route::get('/product-list', [ProductController::class, 'productList'])->name('product-list');
Route::get('/product-details', [ProductController::class, 'productDetails'])->name('product-details');
Route::get('/wishlist', [ProductController::class, 'wishlist'])->name('wishlist');

Route::get('/cek_ip', [ProductController::class, 'cekIp']);