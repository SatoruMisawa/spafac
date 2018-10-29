<?php

namespace App\Http\Controllers\Host;

use App\Http\Controllers\Host\Controller as HostController;

/**
 *
 */
class IndexController extends HostController
{
	/**
	* トップページ
	*/
	public function index() {
		
		//echo password_hash('0000', PASSWORD_BCRYPT);
		//exit;
		
		$data = array(
		);
		
		$view = view('host.index', $data);
		return $view;
	}

}
