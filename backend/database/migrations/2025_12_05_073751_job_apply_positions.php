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
        Schema::create('job_apply_positions', function(Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->foreignId('society_id')->constrained('societies')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('job_vacancy_id')->constrained('job_vacancies')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('position_id')->constrained('available_positions')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('job_apply_societies_id')->constrained('job_apply_societies')->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('status', ['pending', 'accepted', 'rejected']);
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
