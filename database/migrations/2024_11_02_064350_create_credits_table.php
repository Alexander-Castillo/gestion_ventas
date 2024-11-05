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
        Schema::create('credits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('clients','id')->cascadeOnDelete();
            $table->foreignId('sale_id')->constrained('sales','id')->cascadeOnDelete();
            $table->double('total_amount',8,2);
            $table->double('remaning_amount',8,2); 
            $table->timestamp('due_date');
            $table->date('last_payment_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credits');
    }
};
