<?php

namespace App\Http\Controllers;

use App\Prefecture;
use App\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function new() {
		return view('user.new');
    }
    
    public function create(Request $request) {
		$request->validate([
			'name' => 'required',
			'nickname' => 'required',
			'email' => 'required|email|unique:users,email',
			'tel' => 'required|tel',
			'password' => 'required|between:8,20|confirmed',
			'password_confirmation' => 'required',
		]);

		
		$user = User::create($request->all());
		Auth::login($user, true);
				
		return redirect()->route('verification.email.send', $user->id);
	}
}
