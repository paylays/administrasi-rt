<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;

use App\Http\Controllers\Admin\WargaController;
use App\Http\Controllers\Admin\KartuKeluargaController;

use App\Http\Controllers\Admin\ManajamenAkunController;

Route::prefix('admin')->middleware('guest:admin')->group(function () {
    Route::get('login', [LoginController::class, 'create'])->name('admin.login');
    Route::post('login', [LoginController::class, 'store']);
});

Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/data-warga', [WargaController::class, 'index'])->name('admin.data-warga');
    Route::get('/data-warga/create', [WargaController::class, 'create'])->name('admin.data-warga.create');
    Route::post('/data-warga/store', [WargaController::class, 'store'])->name('admin.data-warga.store');
    Route::get('/data-warga/edit/id={id}', [WargaController::class, 'edit'])->name('admin.data-warga.edit');
    Route::put('/data-warga/update/id={id}', [WargaController::class, 'update'])->name('admin.data-warga.update');
    Route::delete('/data-warga/delete/{id}', [WargaController::class, 'destroy'])->name('admin.data-warga.destroy');

    Route::get('/kartu-keluarga', [KartuKeluargaController::class, 'index'])->name('admin.kartu-keluarga');
    Route::get('/kartu-keluarga/create', [KartuKeluargaController::class, 'create'])->name('admin.kartu-keluarga.create');
    Route::post('/kartu-keluarga/store', [KartuKeluargaController::class, 'store'])->name('admin.kartu-keluarga.store');
    Route::get('/kartu-keluarga/detail/id={id}', [KartuKeluargaController::class, 'detail'])->name('admin.kartu-keluarga.detail');
    Route::get('/kartu-keluarga/edit/id={id}', [KartuKeluargaController::class, 'edit'])->name('admin.kartu-keluarga.edit');
    Route::put('/kartu-keluarga/update/id={id}', [KartuKeluargaController::class, 'update'])->name('admin.kartu-keluarga.update');
    Route::delete('/kartu-keluarga/delete/{id}', [KartuKeluargaController::class, 'destroy'])->name('admin.kartu-keluarga.delete');

    Route::get('/manajemen-akun', [ManajamenAkunController::class, 'index'])->name('admin.manajemen-akun');
    Route::put('/manajemen-akun/update', [ManajamenAkunController::class, 'update'])->name('admin.manajemen-akun.update');
    Route::delete('/manajemen-akun/delete', [ManajamenAkunController::class, 'destroy'])->name('admin.manajemen-akun.destroy');
    
    Route::post('logout', [LoginController::class, 'destroy'])->name('admin.logout');
});


