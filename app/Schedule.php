<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Schedule extends Pivot
{
    public $timestamps = false;

    protected $table = 'schedules';

    protected $fillable = [
        'plan_id', 'day_id',
        'from', 'to',
    ];
}