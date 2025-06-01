<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\TambahTransaksiController;
use App\Http\Controllers\User\UserInvoiceController;
use App\Http\Controllers\User\StatusTransaksiController;
use App\Http\Controllers\User\GuestInvoiceController;
use App\Http\Controllers\User\ProfileController as UserProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/tambah-transaksi', [TambahTransaksiController::class, 'index'])->name('tambahtransaksi');
Route::get('/user-invoice-details', [UserInvoiceController::class, 'index'])->name('userinvoice');
Route::get('/status-transaksi', [StatusTransaksiController::class, 'index'])->name('statustransaksi');
Route::get('/guest-invoice-details', [GuestInvoiceController::class, 'index'])->name('gustinvoice');
Route::get('/profile', [UserProfileController::class, 'index'])->name('profile');
