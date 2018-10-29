<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Auth;
use App\SocialAccount;
use App\User;

class FacebookController extends FrontController
{
	//
	protected $socialite;

	//コンストラクタ
	public function __construct(Socialite $socialite) {
		$this->socialite = $socialite;
	}

	//ログイン
	public function facebookLogin() {
		//facebookへリダイレクト
		return Socialite::driver('facebook')->redirect();
	}

	//コールバック
	public function facebookCallback() {
		
		//ユーザー情報を取得
		$fuser = Socialite::driver('facebook')->user();
		
		//登録
		$socialAccount = SocialAccount::find4ProviderId('facebook', $fuser->getId());
		if (!$socialAccount) {
			//登録されていなければ
			
			//ユーザーチェック
			$user = User::find4Email($fuser->getEmail());
			if ($user) {
				//同じメールアドレスで登録済み
				return redirect()->to('login')->with('message', 'メールアドレスはすでに登録されています。');
			}
			
			//登録
			$socialAccount = SocialAccount::regist('facebook', $fuser->getId(), $fuser->getEmail(), $fuser->getName());
		}
		
		//ログイン
		Auth::login($socialAccount->user, true);

		//各情報の取得
		//$fuser->getId();
		//$fuser->getName();
		//$fuser->getEmail();
		
		//リダイレクト
		return redirect('/');
		
	}
}
