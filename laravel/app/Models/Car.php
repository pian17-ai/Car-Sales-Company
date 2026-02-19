<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'car_model_id',
        'year',
        'color',
        'transmission',
        'engine_capacity',
        'vim_number',
        'price',
        'status'
    ];
}
