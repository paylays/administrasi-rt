<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\AjukanSuratController;

use App\Http\Controllers\ErrorController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

require __DIR__ . '/auth.php';
require __DIR__.'/admin-auth.php';

Route::get('/', [HomeController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
    
    Route::get('/ajukan-surat', [AjukanSuratController::class, 'index'])->name('user.ajukan-surat');
    
    Route::get('/profile', [ProfileController::class, 'index'])->name('user.profile');
    Route::post('/profile/verify-nik', [ProfileController::class, 'verifyNIK'])->name('user.profile.verify-nik');
    Route::post('/profile/update', [ProfileController::class, 'updateProfile'])->name('user.profile.update');
    Route::post('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('user.profile.update-password');
});

Route::fallback([ErrorController::class, 'handle'])->name('fallback');

