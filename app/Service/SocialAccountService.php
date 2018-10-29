<?php

namespace App\Service;

use App\User;
use App\Provider;
use App\UserProvider;
use Laravel\Socialite\Contracts\User as ProvidedUser;

class SocialAccountService {
    public function firstOrCreate($providerName, ProvidedUser $providedUser) {
        $provider = Provider::where('name', $providerName)->first();
        $user = $provider->usersWithProvidedUserID($providedUser->id)->first();
        if ($user !== null) {
            return $user;
        }

        return $provider->users()->create([
            'name' => $providedUser->name,
        ], [
            'provided_user_id' => $providedUser->id,
        ]);
    }
}