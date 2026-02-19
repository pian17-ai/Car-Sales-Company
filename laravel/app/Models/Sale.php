<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'invoice_number',
        'customer_id',
        'sales_user_id',
        'sale_date',
        'subtotal',
        'discount',
        'tax',
        'grand_total',
        'payment_type',
        'status'
    ];
}
