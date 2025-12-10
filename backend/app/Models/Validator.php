<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Validator extends Model
{
    protected $fillable = [
        'user_id',
        'role',
        'name',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function instalmentapplication() {
        return $this->hasMany(InstalmentApplication::class);
    }

    public function validation() {
        return $this->hasMany(Validation::class);
    }
}
