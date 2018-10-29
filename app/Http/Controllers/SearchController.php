<?php

namespace App\Http\Controllers;

use App\Purpose;
use App\Space;

/**
 *
 */
class SearchController extends FrontController
{
	public function index() {
		
		//用途
		$purposes = Purpose::get4Select();
		
		//スペース一覧
		$spaces = Space::search();
		
		$data = compact('purposes', 'spaces');
		
		$view = view('search', $data);
		return $view;
    }

}
