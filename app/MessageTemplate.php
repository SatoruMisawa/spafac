<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageTemplate extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'space_id',
        'on_apply_approved', 'on_apply_rejected', 'reminder',
    ];
}