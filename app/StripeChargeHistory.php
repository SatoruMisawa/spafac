<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StripeChargeHistory extends Model
{
    protected $fillable = [
        'charge_history_id', 'claimant_charge_history_id',
    ];
}