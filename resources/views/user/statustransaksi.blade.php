@extends('layouts.main')

@section('title', 'Detail Transaksi Rekber')

@section('content')


<ul role="list" class="space-y-4">
  <!-- Item: Success -->
  <li x-data="{ open: false }" class="transition-all duration-300 flex flex-col rounded-xl bg-emerald-50 shadow-sm cursor-pointer overflow-hidden"
      :class="{ 'ring-2 ring-emerald-200': open }"
      @click="open = !open">
    <div class="flex items-center justify-between p-4">
      <div class="flex items-center gap-x-3">
        <div class="flex items-center justify-center rounded-lg bg-emerald-100 w-12 h-12">
          <!-- Success Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-emerald-500" fill="none" viewBox="0 0 24 24">
            <rect x="3" y="3" width="18" height="18" rx="6" fill="currentColor" class="text-emerald-200"/>
            <path d="M8 12l2.5 2.5L16 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-emerald-500"/>
          </svg>
        </div>
        <div>
          <p class="font-semibold text-gray-900">Transaksi #123</p>
          <p class="text-xs text-gray-400 mt-1">4 April 2025</p>
        </div>
      </div>
      <div>
        <p class="font-semibold text-emerald-500 text-base">Rp. 10.500.00</p>
      </div>
    </div>
    <!-- Detail -->
    <div x-show="open" x-transition class="bg-white border-t border-emerald-100 px-4 py-3 text-sm text-gray-700">
      <div class="flex flex-col gap-1">
        <div><span class="font-semibold">Status:</span> <span class="text-emerald-500">Sukses</span></div>
        <div><span class="font-semibold">Buyer:</span> Muhammad</div>
        <div><span class="font-semibold">Seller:</span> Ahmad</div>
        <div><span class="font-semibold">Deskripsi:</span> Pembelian produk digital.</div>
      </div>
    </div>
  </li>
  <!-- Item: Gagal -->
  <li x-data="{ open: false }" class="transition-all duration-300 flex flex-col rounded-xl bg-rose-50 shadow-sm cursor-pointer overflow-hidden"
      :class="{ 'ring-2 ring-rose-200': open }"
      @click="open = !open">
    <div class="flex items-center justify-between p-4">
      <div class="flex items-center gap-x-3">
        <div class="flex items-center justify-center rounded-lg bg-rose-100 w-12 h-12">
          <!-- Error Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-rose-400" fill="none" viewBox="0 0 24 24">
            <rect x="3" y="3" width="18" height="18" rx="6" fill="currentColor" class="text-rose-200"/>
            <path d="M15 9l-6 6m0-6l6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-rose-400"/>
          </svg>
        </div>
        <div>
          <p class="font-semibold text-gray-900">Transaksi #124</p>
          <p class="text-xs text-gray-400 mt-1">4 April 2025</p>
        </div>
      </div>
      <div>
        <p class="font-semibold text-rose-400 text-base">Rp. 1.500.00</p>
      </div>
    </div>
    <!-- Detail -->
    <div x-show="open" x-transition class="bg-white border-t border-rose-100 px-4 py-3 text-sm text-gray-700">
      <div class="flex flex-col gap-1">
        <div><span class="font-semibold">Status:</span> <span class="text-rose-400">Gagal</span></div>
        <div><span class="font-semibold">Buyer:</span> Siti</div>
        <div><span class="font-semibold">Seller:</span> Budi</div>
        <div><span class="font-semibold">Deskripsi:</span> Transaksi gagal karena saldo tidak cukup.</div>
      </div>
    </div>
  </li>
  <!-- Item: Pending -->
  <li x-data="{ open: false }" class="transition-all duration-300 flex flex-col rounded-xl bg-amber-50 shadow-sm cursor-pointer overflow-hidden"
      :class="{ 'ring-2 ring-amber-200': open }"
      @click="open = !open">
    <div class="flex items-center justify-between p-4">
      <div class="flex items-center gap-x-3">
        <div class="flex items-center justify-center rounded-lg bg-amber-100 w-12 h-12">
          <!-- Pending Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-amber-400" fill="none" viewBox="0 0 24 24">
            <rect x="3" y="3" width="18" height="18" rx="6" fill="currentColor" class="text-amber-200"/>
            <path d="M8 12h8M12 8v8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-amber-400"/>
          </svg>
        </div>
        <div>
          <p class="font-semibold text-gray-900">Transaksi #125</p>
          <p class="text-xs text-gray-400 mt-1">4 April 2025</p>
        </div>
      </div>
      <div>
        <p class="font-semibold text-amber-400 text-base">Rp. 1.500.00</p>
      </div>
    </div>
    <!-- Detail -->
    <div x-show="open" x-transition class="bg-white border-t border-amber-100 px-4 py-3 text-sm text-gray-700">
      <div class="flex flex-col gap-1">
        <div><span class="font-semibold">Status:</span> <span class="text-amber-400">Pending</span></div>
        <div><span class="font-semibold">Buyer:</span> Andi</div>
        <div><span class="font-semibold">Seller:</span> Rina</div>
        <div><span class="font-semibold">Deskripsi:</span> Menunggu konfirmasi pembayaran.</div>
      </div>
    </div>
  </li>
</ul>

@endsection