<?php

namespace App;

use Laravel\Socialite\Contracts\User as SocialiteUser;

class ProvidedUser {
    private $email;

    private $provider;

    public static function create($params = []) {
        return new self($params);
    }

    public function __construct($params = []) {
        $this->email = $params['email'];
        $this->provider = Provider::where('name', $params['provider'])->first();
    }

    public function firstOrCreateUser() {
        $user = User::where('email', $this->email)->first();
        if ($user !== null) {
            return $user;
        }

        return $this->provider->users()->create([
            'email' => $this->email,
        ]);
    }
}