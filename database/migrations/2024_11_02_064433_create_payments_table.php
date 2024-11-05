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
            $table->foreignId('credit_id')->constrained('credits','id')->cascadeOnDelete();
            $table->double('payment_amount',8,2);
            $table->timestamp('payment_date');
            $table->double('remaning_amount',8,2); // se restara de la cantidad de credits menos el payment_amount
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passes');
    }
};
