<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\ManajamenAkunController;
use App\Http\Controllers\Admin\WargaController;
use App\Http\Controllers\Admin\KartuKeluargaController;
use App\Http\Controllers\Admin\JenisSuratController;
use App\Http\Controllers\Admin\PengajuanSuratController;
use App\Http\Controllers\Admin\PengumumanController;

Route::prefix('admin')->middleware('guest:admin')->group(function () {
    Route::get('login', [LoginController::class, 'create'])->name('admin.login');
    Route::post('login', [LoginController::class, 'store']);
});

Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/pengajuan-surat/sedang-diverifikasi', [PengajuanSuratController::class, 'index'])->name('admin.pengajuan-surat');
    Route::get('/pengajuan-surat/selesai', [PengajuanSuratController::class, 'statusSuratSelesai'])->name('admin.pengajuan-surat.selesai');
    Route::get('/pengajuan-surat/ditolak', [PengajuanSuratController::class, 'statusSuratDitolak'])->name('admin.pengajuan-surat.ditolak');
    Route::get('/pengajuan-surat/{pengajuan}/verifikasi', [PengajuanSuratController::class, 'lihatVerifikasi'])->name('admin.pengajuan-surat.verifikasi');

    Route::get('/pengajuan-surat/preview/{id}', [PengajuanSuratController::class, 'previewSurat'])->name('admin.pengajuan-surat.preview');
    Route::post('/pengajuan-surat/{id}/verifikasi', [PengajuanSuratController::class, 'verifikasiSurat'])->name('admin.pengajuan-surat.verifikasi');
    Route::get('/pengajuan-surat/{id}/preview-selesai', [PengajuanSuratController::class, 'lihatSuratSelesai'])->name('admin.pengajuan-surat.preview-selesai');
    Route::put('/admin/pengajuan-surat/tolak', [PengajuanSuratController::class, 'tolakSurat'])->name('admin.pengajuan-surat.tolak');
    Route::delete('/pengajuan-surat/delete/{id}', [PengajuanSuratController::class, 'destroy'])->name('admin.pengajuan-surat.delete');

    Route::get('/jenis-surat', [JenisSuratController::class, 'index'])->name('admin.jenis-surat');
    Route::get('/jenis-surat/preview/{id}', [JenisSuratController::class, 'preview'])->name('admin.jenis-surat.preview');

    Route::get('/data-warga', [WargaController::class, 'index'])->name('admin.data-warga');
    Route::get('/data-warga/create', [WargaController::class, 'create'])->name('admin.data-warga.create');
    Route::post('/data-warga/store', [WargaController::class, 'store'])->name('admin.data-warga.store');
    Route::get('/data-warga/edit/id={id}', [WargaController::class, 'edit'])->name('admin.data-warga.edit');
    Route::put('/data-warga/update/id={id}', [WargaController::class, 'update'])->name('admin.data-warga.update');
    Route::delete('/data-warga/delete/{id}', [WargaController::class, 'destroy'])->name('admin.data-warga.destroy');
    Route::get('/data-warga/template-excel', [WargaController::class, 'downloadTemplate'])->name('admin.data-warga.template-excel');
    Route::post('/data-warga/import-excel', [WargaController::class, 'importFile'])->name('admin.data-warga.import-excel');

    Route::get('/kartu-keluarga', [KartuKeluargaController::class, 'index'])->name('admin.kartu-keluarga');
    Route::get('/kartu-keluarga/create', [KartuKeluargaController::class, 'create'])->name('admin.kartu-keluarga.create');
    Route::post('/kartu-keluarga/store', [KartuKeluargaController::class, 'store'])->name('admin.kartu-keluarga.store');
    Route::get('/kartu-keluarga/detail/id={id}', [KartuKeluargaController::class, 'detail'])->name('admin.kartu-keluarga.detail');
    Route::get('/kartu-keluarga/edit/id={id}', [KartuKeluargaController::class, 'edit'])->name('admin.kartu-keluarga.edit');
    Route::put('/kartu-keluarga/update/id={id}', [KartuKeluargaController::class, 'update'])->name('admin.kartu-keluarga.update');
    Route::delete('/kartu-keluarga/delete/{id}', [KartuKeluargaController::class, 'destroy'])->name('admin.kartu-keluarga.delete');
    Route::get('/kartu-keluarga/template-excel', [KartuKeluargaController::class, 'downloadTemplate'])->name('admin.kartu-keluarga.template-excel');
    Route::post('/kartu-keluarga/import-excel', [KartuKeluargaController::class, 'importFile'])->name('admin.kartu-keluarga.import-excel');

    Route::get('/manajemen-akun', [ManajamenAkunController::class, 'index'])->name('admin.manajemen-akun');
    Route::put('/manajemen-akun/update', [ManajamenAkunController::class, 'update'])->name('admin.manajemen-akun.update');
    Route::delete('/manajemen-akun/delete', [ManajamenAkunController::class, 'destroy'])->name('admin.manajemen-akun.destroy');

    Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('admin.pengumuman');
    Route::get('/pengumuman/create', [PengumumanController::class, 'create'])->name('admin.pengumuman.create');
    Route::post('/pengumuman/store', [PengumumanController::class, 'store'])->name('admin.pengumuman.store');
    Route::get('/pengumuman/edit/id={id}', [PengumumanController::class, 'edit'])->name('admin.pengumuman.edit');
    Route::put('/pengumuman/update/id={id}', [PengumumanController::class, 'update'])->name('admin.pengumuman.update');
    Route::delete('/pengumuman/delete/{id}', [PengumumanController::class, 'destroy'])->name('admin.pengumuman.destroy');

    Route::post('logout', [LoginController::class, 'destroy'])->name('admin.logout');
});


