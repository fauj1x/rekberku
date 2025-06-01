@extends('layouts.main')

@section('title', 'Tambah Transaksi')

@section('content')

<form class="pb-28"> <!-- tambahkan pb-28 di sini -->
  <div class="space-y-10">
    <div class="border-b border-gray-900/10 pb-10">
      <h2 class="text-lg font-semibold text-gray-900">Tambah Transaksi</h2>
      <div class="mt-6 grid grid-cols-1 gap-y-8">
        <!-- Tujuan -->
        <div>
          <label for="tujuan" class="block text-sm font-medium text-gray-900">Tujuan</label>
          <div class="mt-2">
            <input type="text" name="tujuan" id="tujuan" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" placeholder="Masukkan tujuan transaksi">
          </div>
        </div>
        <!-- Tanggal -->
        <div>
          <label for="tanggal" class="block text-sm font-medium text-gray-900">Tanggal</label>
          <div class="mt-2">
            <input type="date" name="tanggal" id="tanggal" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
          </div>
        </div>
        <!-- Buyer -->
        <div>
          <label for="buyer" class="block text-sm font-medium text-gray-900">Buyer</label>
          <div class="mt-2">
            <input type="text" name="buyer" id="buyer" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" placeholder="Nama buyer">
          </div>
        </div>
        <!-- Seller -->
        <div>
          <label for="seller" class="block text-sm font-medium text-gray-900">Seller</label>
          <div class="mt-2">
            <input type="text" name="seller" id="seller" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" placeholder="Nama seller">
          </div>
        </div>
        <!-- Deskripsi -->
        <div>
          <label for="deskripsi" class="block text-sm font-medium text-gray-900">Deskripsi</label>
          <div class="mt-2">
            <textarea name="deskripsi" id="deskripsi" rows="3" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" placeholder="Deskripsikan transaksi"></textarea>
          </div>
        </div>
      </div>
    </div>

    <!-- Pilih Metode Pembayaran Button -->
    <div>
      <button type="button" class="flex items-center w-full justify-between rounded-full bg-indigo-50 px-4 py-3 text-base font-semibold text-indigo-700 hover:bg-indigo-100 focus:outline-none transition">
        Pilih Metode Pembayaran
        <svg class="w-5 h-5 ml-2 text-indigo-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>
      </button>
    </div>

    <!-- Buat Transaksi Button -->
    <div>
      <button type="submit" class="w-full rounded-md bg-indigo-600 px-4 py-3 text-base font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition">
        Buat Transaksi
      </button>
    </div>
  </div>
</form>

@endsection