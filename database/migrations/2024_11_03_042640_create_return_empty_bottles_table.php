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
        Schema::create('return_empty_bottles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products','id')->cascadeOnDelete();
            $table->foreignId('client_id')->constrained('clients','id')->cascadeOnDelete();
            $table->timestamp('return_date');
            $table->integer('quantity_returned');
            $table->enum('status',['empty','damaged'])->default('empty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('return_empty_bottles');
    }
};
