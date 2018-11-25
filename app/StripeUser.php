<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StripeUser extends Model
{
    protected $fillable = [
        'claimant_customer_id', 'claimant_account_id',
    ];
}