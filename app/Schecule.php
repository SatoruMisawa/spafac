<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schecule extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'plan_id', 'day_id',
        'from', 'to',
    ];
}
