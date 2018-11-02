<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreorderPeriod extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];
}
