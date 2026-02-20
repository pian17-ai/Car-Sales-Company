<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreditApplication extends Model
{
    protected $fillable = [
        'sale_id',
        'installment_plan_id',
        'income',
        'job',
        'job_description',
        'status',
        'approve_by'
    ];

    public $timestamps = false;

    public function installmentPlan() {
        return $this->belongsTo(InstallmentPlan::class);
    }

    public function sale() {
        return $this->belongsTo(Sale::class);
    }

    public function approve() {
        return $this->belongsTo(User::class, 'approve_by');
    }

    public function installmentSchedules() {
        return $this->hasMany(InstallmentSchedule::class);
    }
}
