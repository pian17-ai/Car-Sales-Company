<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    protected $fillable = [
        'reference_type',
        'reference_id',
        'approve_by',
        'status',
        'notes'
    ];

    public $timestamps = false;
}
