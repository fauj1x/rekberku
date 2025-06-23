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
                <span class="font-semibold text-gray-800">#{{ $order->code ?? 'T2376' }}</span>
            </div>
            <div class="flex justify-between items-center">
                <span class="font-medium text-gray-900">Tenggat Pembayaran</span>
                <span class="font-bold text-[18px] text-[#ef3b3b] tracking-widest">23 : 59 : 00</span>
            </div>
            <hr class="my-2 border-gray-200">
            <div class="flex justify-between">
                <span class="font-medium text-gray-900">Nama Penjual</span>
                <span class="text-gray-800">{{ $order->seller_name ?? 'abdul saediq' }}</span>
            </div>
            <div class="flex justify-between">
                <span class="font-medium text-gray-900">Nama Pembeli</span>
                <span class="text-gray-800">{{ $order->buyer_name ?? 'perman sodiqien' }}</span>
            </div>
            <div class="flex justify-between">
                <span class="font-medium text-gray-900">No Telp Pembeli</span>
                <span class="text-gray-800">{{ $order->buyer_phone ?? '088256465466' }}</span>
            </div>
            <div class="flex justify-between">
                <span class="font-medium text-gray-900">No Telp Penjual</span>
                <span class="text-gray-800">{{ $order->seller_phone ?? '088256465466' }}</span>
            </div>
            <div class="flex justify-between items-start">
                <span class="font-medium text-gray-900">Tujuan Transaksi</span>
                <span class="italic text-gray-800">{{ $order->description ?? "Pembelian akun FF" }}</span>
            </div>
            <hr class="my-2 border-gray-200">
            <div class="flex justify-between">
                <span class="font-medium text-gray-900">Nilai Transaksi</span>
                <span class="text-gray-800">Rp {{ number_format($order->amount ?? 1000000, 0, ',', '.') }}</span>
            </div>
            <div class="flex justify-between">
                <span class="font-medium text-gray-900">Biaya Admin</span>
                <span class="text-gray-800">Rp {{ number_format($order->admin_fee ?? 2500, 0, ',', '.') }}</span>
            </div>
            <div class="flex justify-between">
                <span class="font-medium text-gray-900">Total yang dibayarkan</span>
                <span class="font-bold text-gray-900">Rp {{ number_format(($order->amount ?? 1000000) + ($order->admin_fee ?? 2500), 0, ',', '.') }}</span>
            </div>
            <hr class="my-2 border-gray-200">
            <div class="flex justify-between items-start">
                <span class="font-medium text-gray-900">Status</span>
                <span class="text-sm italic text-gray-700">{{ $order->status_text ?? "Anda belum membayarkan dana" }}</span>
            </div>
        </div>
        <!-- Action Button -->
        <div class="mt-8 flex justify-center">
            <button
                id="pay-button"
                type="button"
                class="w-full rounded-xl bg-[#9256e6] px-4 py-3 text-base font-semibold text-white flex items-center justify-center gap-2 shadow hover:bg-[#7c3aed] transition"
            >
                Pilih metode pembayaran &amp; Bayar
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>
</div>

<!-- Integrasi Midtrans Snap.js dan jQuery -->
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$('#pay-button').click(function (e) {
    e.preventDefault();
    $.ajax({
        url: '/midtrans/invoice',
        type: 'POST',
        data: {
            order_id: '{{ $order->id ?? 123456 }}',
            amount: '{{ ($order->amount ?? 1000000) + ($order->admin_fee ?? 2500) }}',
            _token: '{{ csrf_token() }}'
            // Tambahkan data lain jika perlu
        },
        success: function (data) {
            if(data.snap_token){
                window.snap.pay(data.snap_token, {
                    onSuccess: function(result){
                        window.location.href = '/payment/success';
                    },
                    onPending: function(result){
                        window.location.href = '/payment/pending';
                    },
                    onError: function(result){
                        alert('Pembayaran gagal!');
                    }
                });
            } else {
                alert('Gagal mendapatkan Snap Token!');
            }
        },
        error: function(){
            alert('Terjadi kesalahan pada server.');
        }
    });
});
</script>
@endsection