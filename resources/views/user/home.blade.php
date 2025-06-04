@extends('layouts.main')

@section('title', 'Home')

@section('content')
<div class="max-w-7xl mx-auto py-6">
    <div class="grid md:grid-cols-3 grid-cols-1 gap-8 mb-8">
        <!-- Left Side -->
        <div class="md:col-span-2 flex flex-col gap-6">
            <div>
                <h2 class="text-2xl font-bold mb-4">Hai, Bendot</h2>
                <div class="flex flex-col md:flex-row gap-4">
                    <!-- Total Transaksi -->
                    <div class="flex-1 rounded-xl bg-[#9256e6] text-white p-6 flex items-center min-w-[260px] relative shadow">
                        <div>
                            <div class="text-sm mb-1 opacity-80">Total Transaksi (Bulan Ini)</div>
                            <div class="text-3xl font-bold mb-2">Rp. 2.838.000</div>
                        </div>
                        <button class="absolute top-4 right-4 text-white opacity-50 hover:opacity-80">
                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7zm10 3a3 3 0 100-6 3 3 0 000 6z"/>
                            </svg>
                        </button>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex flex-col gap-4 flex-1 justify-center min-w-[260px]">
                        <a href="{{ route('tambahtransaksi') }}" class="bg-[#ebe0fd] flex items-center gap-2 rounded-xl px-4 py-3 font-semibold text-[#9256e6] shadow hover:bg-[#e0d3fa] transition text-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="#9256e6" stroke-width="2" viewBox="0 0 24 24"><path d="M4 17v2a2 2 0 002 2h12a2 2 0 002-2v-2"/><path d="M7 9l5 5 5-5"/></svg>
                            Tambah Transaksi
                        </a>
                        <a href="{{ route('statustransaksi') }}" class="bg-[#ebe0fd] flex items-center gap-2 rounded-xl px-4 py-3 font-semibold text-[#9256e6] shadow hover:bg-[#e0d3fa] transition text-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="#9256e6" stroke-width="2" viewBox="0 0 24 24"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M8 2v4"/><path d="M16 2v4"/></svg>
                            Status Transaksi
                        </a>
                    </div>
                </div>
            </div>

            <!-- Banner Promo (Mobile Only) -->
        
            <div class="block md:hidden">
                <x-coming-soon-overlay>
                <div class="rounded-xl overflow-hidden shadow-lg mb-2 mt-6">
                    <img src="https://cdn.jsdelivr.net/gh/fauj1x/assets-cdn/promo-unipin.jpg" alt="Promo" class="w-full object-cover h-[120px]">
                </div>
            </div>
        </x-coming-soon-overlay>
            <!-- Riwayat Transaksi -->
            <div class="mt-8">
                <h3 class="text-lg font-bold text-[#2a3755] mb-4">Riwayat Transaksi</h3>
                <div class="bg-[#f6f0fd] rounded-xl px-6 py-5">
                    <div class="flex flex-col gap-4">
                        <!-- Transaksi Item -->
                        <div class="flex items-center gap-4 bg-white rounded-lg px-4 py-3 shadow-sm">
                            <span class="inline-flex items-center justify-center w-10 h-10 bg-[#e9f8f1] rounded-lg">
                                <svg class="w-6 h-6 text-[#29d084]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 9h6v6H9z"/></svg>
                            </span>
                            <div class="flex-1">
                                <div class="font-semibold">Transaksi #123</div>
                                <div class="text-xs text-gray-500">4 April 2025</div>
                            </div>
                            <div class="font-semibold text-[#29d084]">Rp. 10.500,00</div>
                        </div>
                        <div class="flex items-center gap-4 bg-white rounded-lg px-4 py-3 shadow-sm">
                            <span class="inline-flex items-center justify-center w-10 h-10 bg-[#fdeaea] rounded-lg">
                                <svg class="w-6 h-6 text-[#ef3b3b]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 9l6 6M15 9l-6 6"/></svg>
                            </span>
                            <div class="flex-1">
                                <div class="font-semibold">Transaksi #123</div>
                                <div class="text-xs text-gray-500">4 April 2025</div>
                            </div>
                            <div class="font-semibold text-[#ef3b3b]">Rp. 1.500,00</div>
                        </div>
                        <div class="flex items-center gap-4 bg-white rounded-lg px-4 py-3 shadow-sm">
                            <span class="inline-flex items-center justify-center w-10 h-10 bg-[#fff8ea] rounded-lg">
                                <svg class="w-6 h-6 text-[#f7b731]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M12 8v4l3 3"/></svg>
                            </span>
                            <div class="flex-1">
                                <div class="font-semibold">Transaksi #123</div>
                                <div class="text-xs text-gray-500">4 April 2025</div>
                            </div>
                            <div class="font-semibold text-[#f7b731]">Rp. 1.500,00</div>
                        </div>
                        <a href="{{ route('statustransaksi') }}" class="mt-2 text-sm text-[#9256e6] font-semibold hover:underline text-center">Tampilkan Semua</a>
                    </div>
                </div>
            </div>

            <!-- TopUp Game -->
            <x-coming-soon-overlay>
            <div class="mt-8">
                <h3 class="text-lg font-bold text-[#2a3755] mb-4">TopUp Game</h3>
                <div class="flex gap-4 overflow-x-auto pb-2">
                    @foreach([
                        ['img' => 'https://cdn.jsdelivr.net/gh/fauj1x/assets-cdn/mlbb.jpg', 'name' => 'Mobile Legends'],
                        ['img' => 'https://cdn.jsdelivr.net/gh/fauj1x/assets-cdn/pubgm.jpg', 'name' => 'PUBG Mobile'],
                        ['img' => 'https://cdn.jsdelivr.net/gh/fauj1x/assets-cdn/ff.jpg', 'name' => 'Free Fire'],
                        ['img' => 'https://cdn.jsdelivr.net/gh/fauj1x/assets-cdn/mlbb.jpg', 'name' => 'Mobile Legends'],
                        ['img' => 'https://cdn.jsdelivr.net/gh/fauj1x/assets-cdn/pubgm.jpg', 'name' => 'PUBG Mobile'],
                        ['img' => 'https://cdn.jsdelivr.net/gh/fauj1x/assets-cdn/ff.jpg', 'name' => 'Free Fire'],
                    ] as $game)
                        <div class="bg-white rounded-xl shadow p-2 flex flex-col items-center min-w-[110px]">
                            <img src="{{ $game['img'] }}" alt="{{ $game['name'] }}" class="w-16 h-16 object-cover rounded-lg mb-2">
                            <span class="text-xs font-semibold text-[#2a3755] text-center">{{ $game['name'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
            </x-coming-soon-overlay>
        <!-- Right Side -->
       <x-coming-soon-overlay>
        <div class="flex flex-col gap-6 mt-12">
            <!-- Banner Promo (Only on Desktop) -->
            <div class="rounded-xl overflow-hidden shadow-lg mb-2 hidden md:block">
                <img src="https://cdn.jsdelivr.net/gh/fauj1x/assets-cdn/promo-unipin.jpg" alt="Promo" class="w-full object-cover h-[120px]">
            </div>
            <!-- Marketplace Akun -->
            <div class="rounded-xl bg-[#9256e6] p-5 shadow-lg">
                <div class="flex justify-between items-center mb-3">
                    <span class="text-white font-bold text-lg">Flash discount <span class="text-yellow-300">⚡</span></span>
                    <span class="bg-white/30 rounded-md px-3 py-1 text-xs font-semibold text-white">12:54:00 jam lagi</span>
                </div>
                <div class="flex gap-4 overflow-x-auto">
                    @foreach([1,2,3] as $i)
                    <div class="bg-white rounded-xl p-3 min-w-[170px] max-w-[170px] flex flex-col shadow">
                        <img src="https://cdn.jsdelivr.net/gh/fauj1x/assets-cdn/mlbb-akun.jpg" alt="Akun MLBB" class="rounded-lg h-[80px] object-cover mb-2">
                        <div class="text-xs font-bold text-[#2a3755] mb-1">Akun MLBB PRIBADI Aman dan Ter...</div>
                        <div class="line-through text-xs text-gray-400 mb-1">Rp 1.599.000</div>
                        <div class="text-[#9256e6] font-bold text-lg mb-2">Rp 999.999</div>
                        <button class="bg-[#9256e6] text-white text-xs px-3 py-1 rounded-lg font-semibold hover:bg-[#7c3aed] transition">Lihat detail</button>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        </x-coming-soon-overlay>
    </div>
</div>
@endsection