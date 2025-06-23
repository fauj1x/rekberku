<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class TambahTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.tambahtransaksi');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi request
    $validated = $request->validate([
        'item_image'      => 'nullable|image|max:2048',
        'role'            => 'required|in:penjual,pembeli',
        'tujuan'          => 'required|string|max:255',
        'nominal'         => 'required|string|max:30', // Akan dibersihkan ke angka di bawah
        'tanggal'         => 'required|date',
        'buyer'           => 'required|string|max:255',
        'seller'          => 'required|string|max:255',
        'nomor_rekening'  => 'nullable|string|max:100',
        'deskripsi'       => 'required|string',
        'penanggung_biaya_admin' => 'required|in:pembeli,penjual,dibagi',
        'agreement'       => 'accepted',
        'bank_code'       => 'required|string|max:25',
        'bank_name'       => 'required|string|max:100',
        'payment_link'    => 'nullable|string|max:255',
    ]);

    // Konversi nominal (hapus semua non digit, lalu ke int)
    $nominal = isset($validated['nominal'])
        ? (int)str_replace(['.', ','], '', preg_replace('/\D/', '', $validated['nominal']))
        : null;

    // Kalkulasi biaya admin sesuai skema
    $feePercent = 30;
    if ($nominal > 1000000) {
        $feePercent = 8;
    } elseif ($nominal > 750000) {
        $feePercent = 12;
    } elseif ($nominal > 500000) {
        $feePercent = 15;
    } elseif ($nominal > 250000) {
        $feePercent = 17;
    } elseif ($nominal > 100000) {
        $feePercent = 20;
    } elseif ($nominal > 50000) {
        $feePercent = 25;
    } elseif ($nominal < 10000) {
        $feePercent = 30;
    }
    $feeValue = (int) round($nominal * $feePercent / 100);

    // Hitung total sesuai penanggung biaya admin
    if ($validated['penanggung_biaya_admin'] === 'pembeli') {
        $total = $nominal + $feeValue;
    } elseif ($validated['penanggung_biaya_admin'] === 'dibagi') {
        $total = $nominal + (int)ceil($feeValue / 2);
    } else {
        $total = $nominal; // penjual, fee dipotong dari hasil penjual
    }

    // Handle file upload jika ada
    $itemImagePath = null;
    if ($request->hasFile('item_image')) {
        $itemImagePath = $request->file('item_image')->store('transaksi_images', 'public');
    }

    // Simpan ke database
    $transaction = Transaction::create([
        'user_id'        => \Auth::id(),
        'item_image'     => $itemImagePath,
        'role'           => $validated['role'],
        'tujuan'         => $validated['tujuan'],
        'nominal'        => $nominal,
        'total'          => $total,
        'tanggal'        => $validated['tanggal'],
        'buyer'          => $validated['buyer'],
        'seller'         => $validated['seller'],
        'nomor_rekening' => $validated['role'] === 'penjual' ? $validated['nomor_rekening'] : null,
        'deskripsi'      => $validated['deskripsi'],
        'biaya_admin'    => $feeValue, // Sekarang berupa nominal biaya admin
        'penanggung_biaya_admin' => $validated['penanggung_biaya_admin'],
        'agreement'      => true,
        'bank_code'      => $validated['bank_code'],
        'bank_name'      => $validated['bank_name'],
        'payment_link'   => $validated['payment_link'] ?? null,
    ]);

    return redirect()->route('user.transaksi.show', $transaction->id)
        ->with('success', 'Transaksi berhasil dibuat!');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
