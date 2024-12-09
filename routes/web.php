<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/sign-up', [DashboardController::class, 'signUp'])->name('sign-up');