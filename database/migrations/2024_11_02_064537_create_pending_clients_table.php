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
        Schema::create('pending_clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('clients','id')->cascadeOnDelete();
            $table->foreignId('delivery_id')->constrained('deliveries','id')->cascadeOnDelete();
            $table->enum('reason',['client not found','not sale','trip not complete']);
            $table->timestamp('pending_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pending_clients');
    }
};
