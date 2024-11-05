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
        Schema::create('deliver_days', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('clients','id')->cascadeOnDelete();
            $table->enum('days_of_week',['sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_days');
    }
};
