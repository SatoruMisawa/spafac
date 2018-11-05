<?php

namespace App\Http\Controllers;

use Auth;
use App\ProvidedUser;
use Laravel\Socialite\Contracts\Factory as Socialite;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function new() {
        return view('session.new');
    }

    public function create(Request $request) {
        if (!$this->guard()->attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ], true)) {
            return redirect()->back();
        }

        return redirect('/');
    }

    public function delete() {
        $this->guard()->logout();
        return redirect('login');
    }

    public function redirectToProvider(Socialite $socialite, $provider) {
        return $socialite->driver($provider)->redirect();
    }

    public function handleProviderCallback(Socialite $socialite, $provider) {
        $socialiteUser = $socialite->driver($provider)->user();
        $providedUser = ProvidedUser::create([
            'id' => $socialiteUser->id,
            'name' => $socialiteUser->name,
            'email' => $socialiteUser->email,
            'provider' => $provider,
        ]);

        $user = $providedUser->firstOrCreateUser();

        $this->guard()->login($user, true);

        return redirect('/');
    }

    public function guard() {
        return Auth::guard('users');
    }
}