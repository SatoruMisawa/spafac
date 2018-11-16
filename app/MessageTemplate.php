<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageTemplate extends Model
{
    public $timestamps = false;

    protected $filalble = [
        'space_id', 'content',
    ];
}