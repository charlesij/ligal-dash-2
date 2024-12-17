<?php

use App\Http\Controllers\OfficeController;
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
Route::post('/sign-in', [DashboardController::class, 'loginAttempt'])->name('post-login');
Route::post('/firebase-login', [DashboardController::class, 'firebaseLogin']);
Route::get('/reset-password', [DashboardController::class, 'resetPassword'])->name('reset-password');

// Contoh tanpa middleware auth 
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Users
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::get('/mail', [MailController::class, 'index'])->name('mail');
Route::get('/user-tasks', [UserController::class, 'userTask'])->name('task-manager');
Route::get('/user-settings', [UserController::class, 'userSettings'])->name('user-settings');
Route::get('/user-support', [UserController::class, 'userSupport'])->name('user-support');

// Ecommerce features
Route::get('/ecommerce', [EcommerceController::class, 'ecommerce'])->name('ecommerce');
Route::get('/cart', [EcommerceController::class, 'cart'])->name('cart');
Route::get('/orders', [EcommerceController::class, 'orders'])->name('orders');
Route::get('/order-details', [EcommerceController::class, 'orderDetails'])->name('order-details');

// Products
Route::get('/products', [ProductController::class, 'products'])->name('products');
Route::get('/add-product', [ProductController::class, 'addProduct'])->name('add-product');
Route::get('/add-category', [ProductController::class, 'addCategory'])->name('add-category');
Route::post('/add-product', [ProductController::class, 'storeProduct'])->name('create-product');
Route::get('/product-list', [ProductController::class, 'productList'])->name('product-list');
Route::get('/edit-product/{id}', [ProductController::class, 'editProduct'])->name('edit-product');
Route::post('/edit-product/{id}', [ProductController::class, 'updateProduct'])->name('update-product');
Route::get('/product-details/{id}', [ProductController::class, 'productDetails'])->name('product-details');
Route::get('/wishlist', [ProductController::class, 'wishlist'])->name('wishlist');

// Office 
Route::get('/employee', [OfficeController::class, 'employee'])->name('employee');
Route::get('/cek_ip', [ProductController::class, 'cekIp']);