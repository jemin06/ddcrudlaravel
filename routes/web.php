<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;



Route::get('/', [HomeController::class, 'index'])->name('user.home');


Route::get('/login', [AuthenticationController::class, 'showLogin'])->name('user.login');
Route::post('/login', [AuthenticationController::class, 'login'])->name('user.login.submit');
Route::get('/register', [AuthenticationController::class, 'showRegister'])->name('user.register');
Route::post('/register', [AuthenticationController::class, 'register'])->name('user.register.submit');

Route::middleware(['auth', 'check.role:1'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/user', UserController::class);
});

Route::post('/logout', [AuthenticationController::class, 'logout'])->name('user.logout');
