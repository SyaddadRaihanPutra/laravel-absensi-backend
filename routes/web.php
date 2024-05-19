<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;

Route::get('/', function () {
    return view('auth.auth-login');
});

//jika sukses login masuk ke dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.dashboard', ['type_menu' => 'home']);
    })->name('home');
    Route::resource('user', UserController::class);
    Route::resource('companies', CompanyController::class);
});
