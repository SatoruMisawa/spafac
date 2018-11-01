<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'user_id', 'plan_id',
    ];

    public function plan() {
        return $this->belongsTo(Plan::class);
    }
}
