<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purpose;
use App\Plans;
use App\Space;
use App\Facility;
use App\Prefecture;
use Illuminate\Support\Facades\DB;

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


	public function spaceusageindex($space_usage_id){


		$room = new Facility;
		$room = Facility::join('addresses', 'addresses.id', '=', 'facilities.address_id')
						->leftjoin('prefectures', 'prefectures.id', '=', 'addresses.prefecture_id')
						->join('spaces', 'spaces.facility_id', '=', 'facilities.id')
						//->leftjoin('plans', 'plans.space_id', '=', 'spaces.id')
						->join('space_space_usage', 'space_space_usage.space_id', '=', 'spaces.id')
						->where('space_space_usage.space_usage_id', '=', $space_usage_id)->get();

		$data = compact('space_usage_id', 'room');
		$view = view('search', $data);
		return $view;

	}


	public function searchindex(Request $request){

		//dd($request);
		//search();
		$area =$request->area;
		$plan =$request->plan;
		$price =$request->price;
		$day =$request->day;
		$day =$request->space_usage_id;
		//dateofuse($day);//4月14日の場合
		$starttime =$request->starttime;
		$endtime =$request->endtime;
			//timebetween($starttime,$endtime);
		$men =$request->men;
		$space_usage_id = $request->space_usage_id;

		$query = new Facility;
		$query = Facility::join('addresses', 'addresses.id', '=', 'facilities.address_id')//エリア
										->leftjoin('spaces', 'spaces.facility_id', '=', 'facilities.id')//キャパシティー
										->join('space_space_usage', 'space_space_usage.space_id', '=', 'spaces.id');
		$query->leftjoin('plans', 'plans.space_id', '=', 'spaces.id');//プラン、費用
		$query->join('schedules', 'schedules.plan_id', '=', 'plans.id');//開始時間、終了時間
		//エリア条件
		if(isset($area)){
			//都道府県サーチ
			//$prefectures = new Prefecture;
			$prefectures = Prefecture::select('id','name')->where('name', 'like', "%$area%")->first();
			//存在した場合
			if(isset($prefectures)){
					$query->where('addresses.prefecture_id', '=', $prefectures->id);
			//存在しない場合
			}else{
				 //市町村サーチ
				 	$query->where('addresses.address1', 'like', "%$area%")->orwhere('addresses.address2', 'like', "%$area%");
			}

		}
		//目的条件
		if(isset($space_usage_id)){

			$query->where('space_space_usage.space_usage_id', '=', $space_usage_id);
		}

		//spaces条件
		//キャパシティー
		if(isset($men)){

					$query->where('spaces.capacity', '>=', $men);

		}

		//plan条件
		//利用日
		if(isset($day)){
			$query->where('plans.from','<=',$day)->where('plans.to','>=',$day);
		}
		//費用
		if(isset($price)){

			  $query->where('plans.price_per_hour','<=',$price);
			  $query->where('plans.price_per_day','<=',$price);

		}

		//開始時間、終了時間
		if(isset($starttime)&&isset($endtime)){

			$query->where('schedules.from','<=',$starttime);
			$query->where('schedules.to','<=',$endtime);
		}

		//結合した条件でサーチ
		$room = $query->get();

		$data = compact('space_usage_id', 'room');

		$view = view('search', $data);
		return $view;

	}

public function dateofuse($day,$space_usage_id){

	$room = new Facility;
	$room = Facility::join('addresses', 'addresses.id', '=', 'facilities.address_id')
					->leftjoin('spaces', 'spaces.facility_id', '=', 'facilities.id')
					->leftjoin('plans', 'plans.space_id', '=', 'spaces.id')
					->where('facilities.facility_kind_id', '=', $space_usage_id)->get();

	//$plan = Plans::
}

public function timebetween($starttime,$endtime){

	//whereBetween('id', [4, 6])
	where('plans.from','>=',$starttime)->where('plans.to','>=',$endtime);

	//return
}

}
