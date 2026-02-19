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
}
