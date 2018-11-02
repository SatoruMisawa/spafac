<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'address_id', 'facility_kind_id',
        'name', 'access', 'tel',
    ];
}
