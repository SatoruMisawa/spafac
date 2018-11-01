<?php

namespace App\Http\Controllers;

use App\Prefecture;
use App\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('guest');
    }

    public function new() {
		return view('registration.new');
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

		//メール送信
		// todo: connect email server
		// $email = new EmailVerification($user);
		// Mail::to($user->email)->send($email);
		
		return redirect()->to('registration/send')->with('message', '確認メールを送信しました。');
	}
}
