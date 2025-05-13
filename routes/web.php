<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\DashboardController;

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

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
});

Route::fallback([ErrorController::class, 'handle'])->name('fallback');

