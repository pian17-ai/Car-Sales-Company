<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Society extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'id_card_number',
        'password',
        'name',
        'born_date',
        'gender',
        'address',
        'regional_id',
    ];

    public function regional() {
        return $this->belongsTo(Regional::class);
    }

    public function validation() {
        return $this->hasOne(Validation::class);
    }

    public function instalmentapplication() {
        return $this->hasMany(InstalmentApplication::class);
    }
}
