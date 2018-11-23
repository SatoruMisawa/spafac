<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentSpaceType extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];
}