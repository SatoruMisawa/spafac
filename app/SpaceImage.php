<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpaceImage extends Model
{
    protected $fillable = [
        'space_id',
        'url',
    ];
}
