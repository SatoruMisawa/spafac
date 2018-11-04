<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreorderDeadline extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];
}
