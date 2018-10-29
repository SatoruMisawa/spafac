<?php

namespace App\Http\Controllers\Mypage;

use Auth;
use View;
use App\Space;
use App\Http\Controllers\Controller as AppController;

abstract class Controller extends AppController
{
	public function __construct() {
		
		//ログインユーザーをビューに渡す。
		View::composer('*', function($view) {
			$user = Auth::user();
			$view->with('loginUser', $user);
		});
		
	}
	
	//ログインユーザー取得
	protected function loginUser() {
		return Auth::user();
	}
	
}
