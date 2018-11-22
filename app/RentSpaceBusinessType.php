<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentSpaceBusinessType extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];
}