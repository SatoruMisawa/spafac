<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StripeUser extends Model
{
    protected $fillable = [
        'stripe_source_id', 'stripe_account_id',
    ];
}
