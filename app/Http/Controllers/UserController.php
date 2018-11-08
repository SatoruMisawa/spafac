<?php

namespace App\Http\Controllers;

use App\Prefecture;
use App\User;
use Auth;
use App\Http\Requests\CreateUserRequest;

class UserController extends Controller
{
    public function new() {
		return view('user.new');
    }
    
    public function create(CreateUserRequest $request) {		
		$user = User::create($request->all());
		Auth::login($user, true);
				
		return redirect()->route('verification.email.send', $user->id);
	}
}