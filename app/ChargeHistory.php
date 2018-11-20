<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChargeHistory extends Model
{
    protected $fillable = [
        'user_id', 'reservation_id',
    ];

    public function claimantChargeHistory() {
        return $this->hasOne(StripeChargeHistory::class);
    }
}