<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstallmentSchedule extends Model
{
    protected $fillable = [
        'credit_application_id',
        'installment_number',
        'due_date',
        'amount',
        'status',
    ];

    public $timestamps = false;

    public function creditApplication() {
        return $this->belongsTo(CreditApplication::class);
    }
}
