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
        Schema::create('payments', function (Blueprint $table) {
    $table->id();
    $table->foreignId('transaction_id')->constrained();
    $table->enum('method', ['VA', 'QRIS']);
    $table->string('flip_reference_id')->nullable();
    $table->decimal('amount', 12, 2);
    $table->boolean('is_paid')->default(false);
    $table->timestamp('paid_at')->nullable();
    $table->timestamp('expired_at');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
