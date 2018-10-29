<?php

namespace App\Http\Controllers;

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
		
		$user = new User();
		
		$user->fillRequestData($request);
		
		//バリデート
		$validateRules = [
			'name' => 'required',
			'email' => 'required|email|unique:users,email',
			'nickname' => 'required',
			//'profile' => 'required',
			//'name1' => 'required',
			//'name2' => 'required',
			'tel' => 'required|tel',
			//'industry_id' => '',
			//'job_id' => '',
			//'corporation' => '',
			'zip' => 'required|zip',
			'prefecture_id' => 'required',
			'address1' => 'required',
			'address2' => 'required',
			'address3' => '',
			'new_password' => 'required|between:8,20|confirmed',
			'new_password_confirmation' => 'required',
		];
		$validateMessages = [
		];
		$validator = \Validator::make($request->all(), $validateRules, $validateMessages);
		$customAttributes = [
			'name' => '名前',
			'email' => 'メールアドレス',
			'nickname' => 'ニックネーム',
			'profile' => 'プロフィール',
		];
		$validator->addCustomAttributes($customAttributes);
		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
		}
		
		$user->password = $request->input('new_password');
		$user->email_token = str_random(10);
		$user->save();
		
		//メール送信
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
