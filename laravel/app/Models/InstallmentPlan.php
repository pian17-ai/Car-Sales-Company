<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstallmentPlan extends Model
{
    protected $fillable = [
        'name',
        'tenor_month',
        'interest_rate'
    ];

    public $timestamps = false;

    public function creditApplications() {
        return $this->hasMany(CreditApplication::class);
    }
}
