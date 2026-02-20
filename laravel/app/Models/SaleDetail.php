<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    protected $fillable = [
        'sale_id',
        'car_id',
        'price'
    ];

    public $timestamps = false;

    public function sale() {
        return $this->belongsTo(Sale::class);
    }

    public function car() {
        return $this->belongsTo(Car::class);
    }
}
