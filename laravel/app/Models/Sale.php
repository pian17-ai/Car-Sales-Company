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

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function salesUser() {
        return $this->belongsTo(User::class);
    }

    public function creditApplication() {
        return $this->hasOne(CreditApplication::class);
    }

    public function payments() {
        return $this->hasMany(Payment::class);
    }

    public function saleDetails() {
        return $this->hasMany(SaleDetail::class);
    }
}
