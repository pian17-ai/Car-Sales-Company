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
        'vin_number',
        'price',
        'status'
    ];

    public function carModel() {
        return $this->belongsTo(CarModel::class);
    }

    public function saleDetails() {
        return $this->hasMany(SaleDetail::class);
    }
}
