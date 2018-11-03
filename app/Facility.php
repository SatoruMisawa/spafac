<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id', 'address_id', 'facility_kind_id',
        'name', 'access', 'tel',
    ];

    public function spaces() {
        return $this->hasMany(Space::class);
    }
}
