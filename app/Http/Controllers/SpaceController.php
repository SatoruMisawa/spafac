<?php

namespace App\Http\Controllers;

use App\Purpose;
use App\Space;
use App\Facility;
use App\Facility_kinds;
use App\User;
use App\Plan;
use Illuminate\Support\Facades\DB;
use Auth;
/**
 *
 */
class SpaceController extends FrontController
{
	public function index($facility_id) {

		//用途
		 //$spacはFacility_id
		 //space情報
		  $facility = Facility::join('addresses', 'addresses.id', '=', 'facilities.address_id')
									->where('facilities.id','=',$facility_id)->get();

			$owner = User::where('id',$facility[0]->user_id)->get();
			//dd($owner);
			$space = Facility::where('id','=',$facility_id)->get();
			//dd($facility);
			$facility_kind = DB::table('facility_kinds')->where('id','=',$facility[0]->facility_kind_id)->get();

			$plan = Plan::where('id',$space[0]->id)->get();

			//dd($plan);
			$space_usages = DB::table('space_space_usage')
											->join('space_usages', 'space_usages.id' , '=','space_space_usage.space_usage_id')
											->where('space_space_usage.space_id','=',$space[0]->id)->get();


		//dd($facility);

		$data = compact('space', 'address','facility_kind','space_usages','facility','owner','plan');

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

	public function show(Space $space) {
		return view('space.show', compact('space'));
	}
}
