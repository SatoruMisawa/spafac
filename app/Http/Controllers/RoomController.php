<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as AppController;
use App\Purpose;

/**
 *
 */
class RoomController extends AppController
{
	public function index() {
		
		//用途
		$purposes = Purpose::get4Select();
		
		$data = compact('purposes');
		
		$view = view('room', $data);
		return $view;
    }

}
