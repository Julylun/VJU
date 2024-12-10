<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['booking_id', 'payment_method', 'amount_paid', 'status'];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}