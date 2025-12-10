<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'username',
        'password'
    ];

    public function validator() {
        return $this->hasOne(Validator::class);
    }
}
