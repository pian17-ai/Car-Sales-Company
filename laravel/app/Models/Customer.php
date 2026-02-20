<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'nik',
        'name',
        'birth_date',
        'gender',
        'phone',
        'email',
        'address',
        'regional_id'
    ];

    public function regional() {
        return $this->belongsTo(Regional::class);
    }

    public function sales() {
        return $this->hasMany(Sale::class);
    }
}
