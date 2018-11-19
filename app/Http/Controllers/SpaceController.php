<?php

namespace App\Http\Controllers;

use App\Purpose;
use App\Space;
use App\Facility;
use Auth;
/**
 *
 */
class SpaceController extends FrontController
{
	public function index($space) {

		//用途
		 //$spacはFacility_id
		 //space情報
			$space = Facility::find(1)->spaces()->where('id','=',$space)->get();
		//address情報
			$address = Facility::find(1)->address()->where('id','=',$space)->get();
		//

		//dd($space);

		$data = compact('space', 'address');

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
