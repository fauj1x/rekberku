@extends('layouts.main')

@section('title', 'Invoice Transaksi')

@section('content')
<div class="flex justify-center py-6">
    <div class="w-full max-w-md bg-white rounded-xl shadow-lg px-6 py-7 border border-gray-100">
        <!-- Logo -->
        <div class="flex flex-col items-center mb-6">
            <img src="https://i.ibb.co/YbQWM4x/topupin-logo.png" alt="TopUpIN" class="w-16 h-16 rounded-full mb-1">
            <span class="font-bold text-lg text-[#2a3755]">TopUpIN</span>
        </div>
        <!-- Info Table -->
        <div class="space-y-3 text-[15px]">
            <div class="flex justify-between">
                <span class="font-medium text-gray-900">ID Transaksi</span>
                <span class="font-semibold text-gray-800">#T2376</span>
            </div>
            <div class="flex justify-between items-center">
                <span class="font-medium text-gray-900">Tenggat Pembayaran</span>
                <span class="font-bold text-[18px] text-[#ef3b3b] tracking-widest">23 : 59 : 00</span>
            </div>
            <hr class="my-2 border-gray-200">
            <div class="flex justify-between">
                <span class="font-medium text-gray-900">Nama Penjual</span>
                <span class="text-gray-800">abdul saediq</span>
            </div>
            <div class="flex justify-between">
                <span class="font-medium text-gray-900">Nama Pembeli</span>
                <span class="text-gray-800">perman sodiqien</span>
            </div>
            <div class="flex justify-between">
                <span class="font-medium text-gray-900">No Telp Pembeli</span>
                <span class="text-gray-800">088256465466</span>
            </div>
            <div class="flex justify-between">
                <span class="font-medium text-gray-900">No Telp Penjual</span>
                <span class="text-gray-800">088256465466</span>
            </div>
            <div class="flex justify-between items-start">
                <span class="font-medium text-gray-900">Tujuan Transaksi</span>
                <span class="italic text-gray-800">"Pembelian akun FF"</span>
            </div>
            <hr class="my-2 border-gray-200">
            <div class="flex justify-between">
                <span class="font-medium text-gray-900">Nilai Transaksi</span>
                <span class="text-gray-800">Rp 1.000.000</span>
            </div>
            <div class="flex justify-between">
                <span class="font-medium text-gray-900">Biaya Admin</span>
                <span class="text-gray-800">Rp 2.500</span>
            </div>
            <div class="flex justify-between">
                <span class="font-medium text-gray-900">Total yang dibayarkan</span>
                <span class="font-bold text-gray-900">Rp 1.002.500</span>
            </div>
            <hr class="my-2 border-gray-200">
            <div class="flex justify-between items-start">
                <span class="font-medium text-gray-900">Status</span>
                <span class="text-sm text-[#ef3b3b] italic font-medium">Dana belum dibayarkan oleh pembeli</span>
            </div>
        </div>
        <!-- Action Button -->
        <div class="mt-8 flex justify-center">
            <button type="button" class="w-full rounded-xl bg-[#ff7272] px-4 py-3 text-base font-semibold text-white shadow hover:bg-[#ff5a5a] transition">
                Batalkan Transaksi
            </button>
        </div>
    </div>
</div>
@endsection