<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    protected $fillable = [
        'bank_name', 'bank_code',
        'branch_name', 'branch_code',
        'account_number', 'account_holder',
    ];
}