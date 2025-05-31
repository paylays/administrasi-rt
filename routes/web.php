<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\BantuanController;
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

Route::get('/cover/{filename}', function ($filename) {
    $path = storage_path('app/public/covers/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }   

    return Response::file($path);
})->where('filename', '.*')->name('cover');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
    
    Route::get('/ajukan-surat', [AjukanSuratController::class, 'index'])->name('user.ajukan-surat');

    Route::get('/ajukan-surat/surat-pengantar-rt', [AjukanSuratController::class, 'createPengantarRT'])->name('user.ajukan-surat.surat-pengantar-rt');
    Route::post('/ajukan-surat/surat-pengantar-rt/store', [AjukanSuratController::class, 'storePengantarRT'])->name('user.ajukan-surat.surat-pengantar-rt.store');
    
    Route::get('/profile', [ProfileController::class, 'index'])->name('user.profile');
    Route::post('/profile/verify-nik', [ProfileController::class, 'verifyNIK'])->name('user.profile.verify-nik');
    Route::post('/profile/update', [ProfileController::class, 'updateProfile'])->name('user.profile.update');
    Route::post('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('user.profile.update-password');
    Route::delete('/profil/hapus-akun', [ProfileController::class, 'destroy'])->name('user.profile.destroy');

     Route::get('/faqs-bantuan', [BantuanController::class, 'index'])->name('user.faqs-bantuan');
});

Route::fallback([ErrorController::class, 'handle'])->name('fallback');

