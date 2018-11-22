<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ScheduleToStay extends Pivot
{
    public $timestamps = false;

    protected $table = 'schedules_to_stay';

    protected $fillable = [
        'plan_id', 'day_id',
        'checkin_from', 'checkin_to',
        'checkout_from', 'checkout_to',
    ];
}