<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'prefecture_id', 'zip',
        'address1', 'address1_ruby',
        'address2', 'address2_ruby',
        'address3', 'address3_ruby',
        'latitude', 'longitude',
    ];

    public function spaces() {
        return $this->hasMany(Space::class);
    }

    public function facilities() {
        return $this->hasMany(Facility::class);
    }
}
