<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StripeCharge extends Model
{
    protected $fillable = [
        'user_id', 'reservation_id', 'stripe_charge_id',
    ];
}
