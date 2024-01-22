<?php

use App\Http\Controllers\PendudukController;
use App\Http\Controllers\SembakoController;
use App\Http\Controllers\TunaiController;
use App\Http\Controllers\RumahController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});
Route::resource('penduduk', PendudukController::class);
Route::resource('sembako', SembakoController::class);
Route::resource('tunai', TunaiController::class);
Route::resource('rumah', RumahController::class);
Route::get('cetak', [PDFController::class, 'cetakPDF'])->name('cetak');
Route::get('cetaksembako', [PDFController::class, 'cetakPDFSembako'])->name('cetaksembako');
Route::get('cetakPenduduk', [PDFController::class, 'cetakPDFPenduduk'])->name('cetakPenduduk');
Route::get('cetaktunai', [PDFController::class, 'cetakPDFtunai'])->name('cetaktunai');
