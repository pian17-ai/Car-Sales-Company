<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'name',
        'brand',
        'type',
        'year',
        'price'
    ];

    public function instalmentapplication() {
        return $this->hasMany(InstalmentApplication::class);
    }

    public function carmonthoptions() {
        return $this->hasMany(CarMonthOption::class);
    }
}
