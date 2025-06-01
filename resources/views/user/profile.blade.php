@extends('layouts.main')

@section('title', 'Profil')

@section('content')
<div class="max-w-md mx-auto md:max-w-lg lg:max-w-xl py-6 px-2 bg-[#f9f9fb] min-h-screen">

    <!-- Profile Card -->
    <div class="bg-white rounded-2xl shadow-sm flex flex-col items-center p-6 mb-4">
        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Boger Bojinov" class="w-20 h-20 rounded-full object-cover mb-3">
        <div class="text-center">
            <div class="font-bold text-[20px] text-gray-900 leading-tight">Boger Bojinov</div>
            <div class="text-sm text-gray-400 mt-1">BogerBojinov@gmail.com</div>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="flex flex-col gap-3 mb-4 sm:flex-row">
        <a href="#" class="flex-1 flex items-center justify-between rounded-xl border border-gray-200 bg-white px-4 py-3 font-medium text-gray-900 hover:bg-gray-50 transition group shadow-sm">
            Jual Item di Marketplace
            <svg class="w-5 h-5 text-violet-500 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
            </svg>
        </a>
        <a href="#" class="flex-1 flex items-center justify-between rounded-xl border border-gray-200 bg-white px-4 py-3 font-medium text-gray-900 hover:bg-gray-50 transition group shadow-sm">
            Lihat etalase
            <svg class="w-5 h-5 text-violet-500 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
            </svg>
        </a>
    </div>

    <!-- Pengaturan dan Info Section -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 px-2 py-2">
        <div class="px-2 pt-2 pb-1 text-xs font-semibold text-gray-500 tracking-widest">
            PENGATURAN AKUN
        </div>
        <div class="divide-y divide-gray-100">
            <!-- Keamanan -->
            <a href="#" class="flex items-center justify-between px-2 py-3 hover:bg-gray-50 rounded-xl transition group">
                <span class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <rect width="16" height="12" x="4" y="7" rx="2" />
                        <path d="M8 7V5a4 4 0 1 1 8 0v2"/>
                    </svg>
                    Keamanan
                </span>
                <svg class="w-5 h-5 text-violet-500 group-hover:translate-x-1 transition"
                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
            <!-- Disukai -->
            <a href="#" class="flex items-center justify-between px-2 py-3 hover:bg-gray-50 rounded-xl transition group">
                <span class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 21s-5-4.35-8-7.5C1.2 11.2 1.2 8.2 4 6.9c2.1-1 3.9.6 4 2.1.1-1.5 1.9-3.1 4-2.1 2.8 1.3 2.8 4.3 0 6.6C17 16.65 12 21 12 21z"/>
                    </svg>
                    Disukai
                </span>
                <svg class="w-5 h-5 text-violet-500 group-hover:translate-x-1 transition"
                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
            <!-- Tentang Kami -->
            <a href="#" class="flex items-center justify-between px-2 py-3 hover:bg-gray-50 rounded-xl transition group">
                <span class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M12 16v-4" stroke-linecap="round"/>
                        <circle cx="12" cy="8" r="1" fill="currentColor" stroke="none"/>
                    </svg>
                    Tentang Kami
                </span>
                <svg class="w-5 h-5 text-violet-500 group-hover:translate-x-1 transition"
                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
        <div class="mt-2 divide-y divide-gray-100">
            <!-- Kebijakan Privasi -->
            <a href="#" class="flex items-center justify-between px-2 py-3 hover:bg-gray-50 rounded-xl transition group">
                <span class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 22c5.522 0 10-4.478 10-10S17.522 2 12 2 2 6.478 2 12s4.478 10 10 10zm0 0v-4a2 2 0 1 0-4 0v4m4 0h4a2 2 0 1 0 0-4h-4"/>
                    </svg>
                    Kebijakan Privasi
                </span>
                <svg class="w-5 h-5 text-violet-500 group-hover:translate-x-1 transition"
                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
            <!-- Bantuan -->
            <a href="#" class="flex items-center justify-between px-2 py-3 hover:bg-gray-50 rounded-xl transition group">
                <span class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M12 17h.01M12 13a4 4 0 1 0-4-4" stroke-linecap="round"/>
                    </svg>
                    Bantuan
                </span>
                <svg class="w-5 h-5 text-violet-500 group-hover:translate-x-1 transition"
                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
            <!-- Keluar -->
            <a href="#" class="flex items-center justify-between px-2 py-3 hover:bg-gray-50 rounded-xl transition group">
                <span class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round"/>
                    </svg>
                    Keluar
                </span>
                <svg class="w-5 h-5 text-violet-500 group-hover:translate-x-1 transition"
                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>

</div>

<!-- Responsive tweaks -->
<style>
@media (min-width: 640px) {
    /* sm: Jual akun & Lihat etalase sejajar */
    .sm\:flex-row { flex-direction: row !important; }
    .sm\:gap-3 { gap: 0.75rem !important; }
}
@media (min-width: 768px) {
    /* md: Card lebih lebar dan center */
    .md\:max-w-lg { max-width: 32rem !important; }
}
@media (min-width: 1024px) {
    .lg\:max-w-xl { max-width: 36rem !important; }
}
</style>
@endsection