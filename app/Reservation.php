<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'host_id', 'guest_id', 'apply_id', 'is_charged',
    ];

    public function host() {
        return $this->belongsTo(User::class, 'host_id');
    }

    public function guest() {
        return $this->belongsTo(User::class, 'guest_id');
    }

    public function apply() {
        return $this->belongsTo(Apply::class);
    }

    public function getCharged() {
        $this->is_charged = true;
        $this->save();
    }
}