<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StripeUser extends Model
{
    protected $fillable = [
        'claimant_source_id', 'claimant_account_id',
    ];
}