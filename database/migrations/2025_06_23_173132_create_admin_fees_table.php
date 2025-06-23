<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('admin_fees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('min_amount');   // Minimal nominal transaksi (inclusive)
            $table->unsignedBigInteger('max_amount')->nullable(); // Maksimal nominal transaksi (inclusive/null = tak terbatas)
            $table->decimal('percentage', 5, 2)->unsigned(); // BENAR            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admin_fees');
    }
};