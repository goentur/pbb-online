<?php

use App\Http\Controllers\Master\PegawaiController;
use App\Http\Controllers\Master\PenggunaController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->prefix('master')->name('master.')->group(function () {
    Route::prefix('pegawai')->name('pegawai.')->group(function () {
        Route::middleware('can:pegawai-index')->post('data', [PegawaiController::class, 'data'])->name('data');
    });
    Route::prefix('pengguna')->name('pengguna.')->group(function () {
        Route::middleware('can:pengguna-index')->post('data', [PenggunaController::class, 'data'])->name('data');
    });
    Route::resource('pegawai', PegawaiController::class)->middleware('can:pegawai-index');
    Route::resource('pengguna', PenggunaController::class)->middleware('can:pengguna-index');
});
