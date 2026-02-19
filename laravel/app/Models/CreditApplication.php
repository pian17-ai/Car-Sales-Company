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
}
