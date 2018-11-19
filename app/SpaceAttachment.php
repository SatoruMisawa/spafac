<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpaceAttachment extends Model
{
    const TYPE_IMAGE = "image";
    
    const TYPE_VIDEO = "video";

    public $timestamps = false;

    protected $fillable = [
        'space_id', 'url', 'type',
    ];
}