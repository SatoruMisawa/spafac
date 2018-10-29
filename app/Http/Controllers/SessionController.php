<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function __construct() {
        $this->middleware('guest')->except('delete');
    }

    public function new() {
        return view('auth.login');
    }

    public function create(Request $request) {
        if (!Auth::attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ], true)) {
            return redirect()->back();
        }

        // todo: change location to redirect properly
        return redirect('home');
    }

    public function delete() {
        Auth::logout();
        return redirect('login');
    }
}