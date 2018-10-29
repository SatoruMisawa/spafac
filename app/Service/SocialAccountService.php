<?php

namespace App\Service;

use App\User;
use App\Provider;
use App\UserProvider;
use Laravel\Socialite\Contracts\User as ProvidedUser;

class SocialAccountService {
    public function firstOrCreate($providerName, ProvidedUser $providedUser) {
        $provider = Provider::where('name', $providerName)->first();
        $userProvider = UserProvider::where([
            'provider_id' => $provider->id,
            'provided_user_id' => $providedUser->id,
        ])->first();
        
        if ($userProvider !== null) {
            return User::find($userProvider->user_id);
        }

        return $provider->users()->create([
            'name' => $providedUser->name,
        ], [
            'provided_user_id' => $providedUser->id,
        ]);
    }
}