<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeyDelivery extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];
}
