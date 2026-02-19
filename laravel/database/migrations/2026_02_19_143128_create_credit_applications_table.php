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
        Schema::create('credit_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sale_id')->constrained('sales');
            $table->foreignId('installment_plan_id')->constrained('installment_plans');
            $table->bigInteger('income');
            $table->string('job');
            $table->text('job_description');
            $table->enum('status', ['pending', 'approved', 'rejected']);
            $table->foreignId('approve_by')->constrained('users');
            $table->timestamp('approve_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credit_applications');
    }
};
