<?php

namespace App;

use Laravel\Socialite\Contracts\User;

class ProvidedUser {
    public $id;

    public $name;

    public $provider;

    public static function create($params = []) {
        return new self($params);
    }

    public function __construct($params = []) {
        $this->id = $params['id'];
        $this->name = $params['name'];
        $this->provider = Provider::where('name', $params['provider'])->first();
    }

    public function firstOrCreateUser() {
        $user = $this->provider->usersWithProvidedUserID($this->id)->first();
        if ($user !== null) {
            return $user;
        }

        return $this->provider->users()->create([
            'name' => $this->name,
        ], [
            'provided_user_id' => $this->id,
        ]);
    }
}