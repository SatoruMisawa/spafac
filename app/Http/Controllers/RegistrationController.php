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
		$this->middleware('guest');
	}

	/**
	* 新規会員登録
	*/
	public function index(Request $request) {
		
		//都道府県
		$prefectureList = Prefecture::array4Select();
		
		$data = compact('user', 'prefectureList');
		
		$view = view('registration.index', $data);
		return $view;
	}
	
	/**
	*新規会員登録(確認)
	*/
	public function confirm(Request $request) {
		$request->validate([
			'nickname' => 'required',
			'password' => 'required|between:8,20|confirmed',
			'password_confirmation' => 'required',
			'name' => 'required',
			'email' => 'required|email|unique:users,email',
			'tel' => 'required|tel',
			'zip' => 'required|zip',
			'prefecture_id' => 'required', // todo: seed prefectures
			'address1' => 'required',
			'address2' => 'required',
		]);

		$user = User::create($request->all());
		Auth::login($user, true);

		//メール送信
		// todo: connect email server
		$email = new EmailVerification($user);
		Mail::to($user->email)->send($email);
		
		return redirect()->to('registration/send')->with('message', '確認メールを送信しました。');
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
