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
    $table->foreignId('buyer_id')->constrained('users');
    $table->foreignId('seller_id')->constrained('users');
    $table->string('item_name');
    $table->decimal('amount', 12, 2);
    $table->decimal('fee', 12, 2)->default(0);
    $table->enum('status', ['pending', 'paid', 'delivered', 'released', 'cancelled'])->default('pending');
    $table->text('notes')->nullable();
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
