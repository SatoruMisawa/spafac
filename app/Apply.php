<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $fillable = [
        'user_id', 'plan_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function plan() {
        return $this->belongsTo(Plan::class);
    }
}
