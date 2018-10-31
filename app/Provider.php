<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

    public function users() {
        return $this->belongsToMany(User::class, 'user_provider')->using(UserProvider::class);
    }

    public function usersWithProvidedUserID($providedUserID) {
        return $this->belongsToMany(User::class, 'user_provider')
                    ->using(UserProvider::class)
                    ->wherePivot('provided_user_id', $providedUserID);
    }
}
