@extends('layouts.main')

@section('title', 'Tambah Transaksi')

@section('content')

<form class="pb-28" enctype="multipart/form-data">
  <div class="space-y-10">
    <div class="border-b border-gray-900/10 pb-10">
      <h2 class="text-lg font-semibold text-gray-900">Tambah Transaksi</h2>
      <div class="mt-6 grid grid-cols-1 gap-y-8">
        <!-- Item yang akan dijual/beli -->
        <div>
          <label class="block text-sm font-medium text-gray-900 mb-2">Item yang akan dijual / beli</label>
          <input
            type="file"
            name="item_image"
            id="item_image"
            class="block w-full text-sm text-gray-900 file:mr-4 file:py-2 file:px-4
                   file:rounded-md file:border-0 file:text-sm file:font-semibold
                   file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100"
            accept="image/*"
          >
        </div>
        <!-- Saya sebagai -->
        <div>
          <label for="role" class="block text-sm font-medium text-gray-900">Saya sebagai</label>
          <select
            name="role"
            id="role"
            class="mt-2 block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600"
            required
          >
            <option value="" disabled selected>Pilih peran Anda</option>
            <option value="penjual">Penjual</option>
            <option value="pembeli">Pembeli</option>
          </select>
        </div>
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

    <!-- Catatan dan Checklist Kejujuran Data -->
    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded-lg mt-4">
      <div class="flex items-start">
        <svg class="w-6 h-6 text-yellow-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1 4v-4m-1 4v1a1 1 0 001 1h.01a1 1 0 001-1v-1m-2-8a4 4 0 118 0 4 4 0 01-8 0zm4-4a4 4 0 100 8 4 4 0 000-8z" />
        </svg>
        <div>
          <div class="font-semibold text-yellow-800 mb-1">Catatan Penting</div>
          <ul class="list-disc pl-5 text-sm text-yellow-800 space-y-1">
            <li>Pastikan semua data yang Anda isikan adalah benar dan sesuai dengan kondisi sebenarnya.</li>
            <li>Pengisian data yang tidak benar dapat menyebabkan kerugian bagi semua pihak.</li>
            <li>Data palsu atau tidak valid dapat berakibat pada pembatalan transaksi, pemblokiran akun, atau tindakan hukum sesuai peraturan yang berlaku.</li>
            <li>Selalu cek kembali sebelum submit untuk mencegah penipuan atau kesalahan transaksi.</li>
          </ul>
          <div class="mt-3 flex items-center">
            <input type="checkbox" id="agreement" name="agreement" required class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" />
            <label for="agreement" class="ml-2 text-sm text-yellow-900">
              Saya menyatakan bahwa data yang saya isikan sudah benar dan dapat dipertanggungjawabkan.
            </label>
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
      <button
        type="submit"
        class="w-full px-4 py-3 text-base font-semibold text-white shadow-xs transition"
        style="background-color: #9256e6; border-radius: 2rem;"
      >
        Buat Transaksi
      </button>
    </div>
  </div>
</form>

@endsection