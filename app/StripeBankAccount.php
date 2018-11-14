<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StripeBankAccount extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'stripe_bank_account_id',
    ];
}