<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'password',
        'is_active'
    ];

    public function roles() {
        return $this->belongsToMany(RoleUser::class, 'role_user');
    }
}
