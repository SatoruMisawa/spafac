<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\User;
use App\Prefecture;
use Mail;
use App\Mail\EmailVerification;

/**
 *
 */
class RegistrationController extends FrontController
{
	public function __construct() {
		$this->middleware('guest')->except('send');
	}
	
	/**
	* 新規会員登録・確認メール送信
	*/
	public function send(Request $request) {
		
		$data = array();
		
		$view = view('registration.send', $data);
		return $view;
	}
	
	/**
	* メールアドレスの認証
	*/
	public function verify($token) {
		if (User::verify($token)) {
			return redirect()->to('login')->with('message', 'メールアドレスの登録確認が終わりました。');
		}
		
		return redirect()->to('login')->with('message', 'メールアドレスの登録確認ができませんでした。');
		
	}
}
