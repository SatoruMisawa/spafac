<?php

namespace App\Http\Controllers;

use Auth;
use App\Service\SocialAccountService;
use Laravel\Socialite\Contracts\Factory;
use Illuminate\Http\Request;

class SocialAccountAuthController extends Controller
{
    private $socialite;

    public function __construct() {
        $this->socialite = app()->make(Factory::class);
    }

    public function redirectToProvider($provider) {
        return $this->socialite->driver($provider)->redirect();
    }

    public function handleProviderCallback(SocialAccountService $service, $provider) {
        $providedUser = $this->socialite->driver($provider)->user();
        
        $user = $service->firstOrCreate($provider, $providedUser);

        Auth::login($user, true);

        return redirect('/');
    }
}
