<?php

namespace App\Http\Controllers;

use App\Purpose;

/**
 *
 */
class SpaceController extends FrontController
{
	public function index($space) {
		
		//用途
		$purposes = Purpose::get4Select();
		
		$data = compact('space', 'purposes');
		
		$view = view('space', $data);
		return $view;
	}

	/**
	* 画像
	*/
	public function media($media = null, $width = null, $height = null, $fit = false) {
		
		if ($media) {
			return $media->responseThumbnail($fit, $width, $height);
		}
		
		//画像無し
		return Media::responseNoThumbnail($width, $height);
		
	}
}
