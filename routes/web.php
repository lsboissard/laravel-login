<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(AuthController::class)->group(function(){
    Route::get('/login', 'index')->name('auth.index');
    Route::get('/register', 'register')->name('auth.register');
    Route::get('/logout', 'logout')->name('auth.logout');
    Route::post('/login', 'login')->name('auth.login');
    Route::post('/register', 'create')->name('auth.create');
});

// Route::get('/register', [AuthController::class, 'index'])->name('auth.index');
// Route::post('/register', [AuthController::class, 'login'])->name('auth.login');