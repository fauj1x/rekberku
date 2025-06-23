<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            // Foreign key ke tabel users
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            // Data transaksi
            $table->string('item_image')->nullable(); // path file gambar
            $table->enum('role', ['penjual', 'pembeli']);
            $table->string('tujuan')->nullable();
            $table->unsignedBigInteger('nominal')->nullable();
            $table->unsignedBigInteger('total')->nullable(); // <--- Tambah kolom total transaksi
            $table->date('tanggal')->nullable();
            $table->string('buyer')->nullable();
            $table->string('seller')->nullable();

            // Rekening hanya jika role = penjual (boleh nullable)
            $table->string('nomor_rekening')->nullable();

            $table->text('deskripsi')->nullable();
            $table->unsignedBigInteger('biaya_admin')->nullable();
            $table->enum('penanggung_biaya_admin', ['pembeli', 'penjual', 'dibagi']);


            // Agreement (harus dicentang, boolean)
            $table->boolean('agreement')->default(false);

            // Data bank tujuan pencairan
            $table->string('bank_code')->nullable();
            $table->string('bank_name')->nullable();

            $table->text('payment_link')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};