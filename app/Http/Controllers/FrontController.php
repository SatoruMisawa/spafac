<?php

namespace App\Http\Controllers;

use Auth;
use View;
use App\Http\Controllers\Controller as AppController;

abstract class FrontController extends AppController
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