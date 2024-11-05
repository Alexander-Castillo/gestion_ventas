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
        Schema::create('sale_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sale_id')->constrained('sales','id')->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('products','id')->cascadeOnDelete();
            $table->integer('quantity');
            $table->double('price',8,2); // asignarle el precio del producto seleccionado si no existe precio personalizado
            $table->double('subtotal',8,2); // resultado de calculo queantity * price = subtotal
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_details');
    }
};
