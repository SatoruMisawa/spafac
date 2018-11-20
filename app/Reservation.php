<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'user_id', 'apply_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function apply() {
        return $this->belongsTo(Apply::class);
    }
}