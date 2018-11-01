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
		return view('host.index');
	}

}
