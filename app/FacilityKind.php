<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacilityKind extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];
}
