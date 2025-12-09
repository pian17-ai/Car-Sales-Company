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
        Schema::create('instalment_application', function(Blueprint $table) {
            $table->id();
            $table->foreignId('society_id')->constrained('societies');
            $table->foreignId('validator_id')->constrained('validators');
            $table->foreignId('car_id')->constrained('car');
            $table->foreignId('car_month_option_id')->constrained('car_month_options');
            $table->enum('status', ['pending', 'accepted', 'rejected']);
            $table->text('admin_notes');
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
