<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\LoginController;



Route::get('/', [SiteController::class, 'index']);

Route::prefix('painel')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('login', [LoginController::class, 'index'])->name('login');
});

/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/