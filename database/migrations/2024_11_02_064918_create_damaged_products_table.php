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
        Schema::create('damaged_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inventary_id')->constrained('inventories','id')->cascadeOnDelete();
            $table->foreignId('delivery_id')->constrained('deliveries','id')->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('products','id')->cascadeOnDelete();
            $table->integer('quantity_damaged');
            $table->integer('quantity_repaired')->default(0);
            $table->integer('quantity_lost')->default(0);
            $table->date('report_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('damaged_products');
    }
};
