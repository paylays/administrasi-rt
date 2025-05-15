<?php

use App\Http\Controllers\Admin\ManajamenAkunController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;

use App\Http\Controllers\Admin\WargaController;
use App\Http\Controllers\Admin\KartuKeluargaController;


Route::prefix('admin')->middleware('guest:admin')->group(function () {
    Route::get('login', [LoginController::class, 'create'])->name('admin.login');
    Route::post('login', [LoginController::class, 'store']);
});

Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/data-warga', [WargaController::class, 'index'])->name('admin.data-warga');

    Route::get('/kartu-keluarga', [KartuKeluargaController::class, 'index'])->name('admin.kartu-keluarga');

    Route::get('/manajemen-akun', [ManajamenAkunController::class, 'index'])->name('admin.manajemen-akun');
    
    Route::post('logout', [LoginController::class, 'destroy'])->name('admin.logout');
});


