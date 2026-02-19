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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_model_id')->constrained('car_models');
            $table->integer('year');
            $table->string('color', 100);
            $table->enum('transmission', ['manual', 'automatic']);
            $table->string('engine_capacity', 50);
            $table->string('vin_number', 100)->unique();
            $table->bigInteger('price');
            $table->enum('status', ['available', 'reserved', 'sold']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
