<?php

namespace App\Http\Controllers\Host;

use Auth;
use View;
use App\Space;
use App\Plan;
use App\Http\Controllers\Controller as AppController;

abstract class Controller extends AppController
{
	public function __construct() {
		
		//ログインユーザーをビューに渡す。
		View::composer('*', function($view) {
			$user = Auth::user();
			$view->with('loginUser', $user);
		});
		
		//現在編集対象のスペース
		// View::composer('*', function($view) {
		// 	$space = Space::getCurrentSpace();
		// 	$view->with('currentSpace', $space);
		// 	$plan = Plan::getCurrentPlan();
		// 	$view->with('currentPlan', $plan);
		// });
		
	}
	
	//ログインユーザー取得
	protected function loginUser() {
		return Auth::user();
	}
	
}
