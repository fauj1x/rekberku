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
        Schema::create('disbursements', function (Blueprint $table) {
    $table->id();
    $table->foreignId('transaction_id')->constrained();
    $table->string('payment_method'); // bank_transfer, ovo, gopay, dana, etc
    $table->string('to_account'); // nomor rekening bank atau nomor e-wallet
    $table->string('to_account_name');
    $table->decimal('amount', 12, 2);
    $table->enum('status', ['pending', 'sent', 'failed'])->default('pending');
    $table->string('flip_disbursement_id')->nullable();
    $table->json('metadata')->nullable(); // simpan data tambahan spesifik payment gateway
    $table->timestamp('sent_at')->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disbursements');
    }
};
