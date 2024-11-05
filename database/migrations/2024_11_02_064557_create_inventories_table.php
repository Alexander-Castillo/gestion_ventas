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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products','id')->cascadeOnDelete();
            $table->integer('quantity_income');
            $table->double('total_cost',8,2); // segun el producto el precio del producto x quantity_income = total_cost
            $table->timestamp('income_date');
            $table->integer('quantity_damage');
            $table->integer('quantity_repair');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventaries');
    }
};
