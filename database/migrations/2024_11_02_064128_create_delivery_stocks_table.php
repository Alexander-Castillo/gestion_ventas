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
        Schema::create('delivery_stocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('delivery_id')->constrained('deliveries','id')->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('products','id')->cascadeOnDelete();
            $table->integer('stock');
            $table->integer('quantity_returned');
            $table->integer('quantity_damaged');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_stocks');
    }
};
