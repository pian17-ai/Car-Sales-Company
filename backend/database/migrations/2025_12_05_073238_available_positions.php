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
        Schema::create('available_positions', function(Blueprint $table) {
            $table->id();
            $table->foreignId('job_varancy_id')->constrained('job_vacancies')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('position');
            $table->bigInteger('capacity');
            $table->bigInteger('apply_capacity');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
