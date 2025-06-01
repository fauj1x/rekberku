<?php

use App\Http\Controllers\Guest\GuestInvoiceController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\StatusTransaksiController;
use App\Http\Controllers\User\TambahTransaksiController;
use App\Http\Controllers\User\UserInvoiceController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/tambah-transaksi', [TambahTransaksiController::class, 'index'])->name('tambahtransaksi');
Route::get('/user-invoice-details', [UserInvoiceController::class, 'index'])->name('userinvoice');
Route::get('/status-transaksi', [StatusTransaksiController::class, 'index'])->name('statustransaksi');
Route::get('/guest-invoice-details', [GuestInvoiceController::class, 'index'])->name('gustinvoice');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

