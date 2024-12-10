<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/sign-up', [DashboardController::class, 'signUp'])->name('sign-up');
Route::get('/sign-in', [DashboardController::class, 'signIn'])->name('sign-in');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');