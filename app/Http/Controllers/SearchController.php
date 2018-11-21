<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purpose;
use App\Plans;
use App\Space;
use App\Facility;
use App\Prefecture;
use App\Amenity;

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


	public function amenitiesindex($amenities){

		$query = new Facility;
		$query = Facility::join('addresses', 'addresses.id', '=', 'facilities.address_id')//エリア
										->leftjoin('spaces', 'spaces.facility_id', '=', 'facilities.id');//キャパシティー

		$spaces_id_amenities = DB::table('amenity_space')->select('space_id')->where('amenity_id', '=', $amenities)->distinct()->get();

		//dd($spaces_id_amenities-);
		if($spaces_id_amenities->isEmpty()){
			$room =[];
		}else{
				foreach ($spaces_id_amenities as $value) {
								$query->where('spaces.id', $value->space_id);
						}
						$room = $query->get();
		}
		$space_usage_id = '';
		$data = compact('space_usage_id', 'room');
		$view = view('search', $data);
		return $view;
	}


	public function capacitiesindex($capacities){

		$query = new Facility;
		$query = Facility::join('addresses', 'addresses.id', '=', 'facilities.address_id')//エリア
										->leftjoin('spaces', 'spaces.facility_id', '=', 'facilities.id');//キャパシティー

		$query->where('spaces.capacity', '>=', $capacities);

		$room = $query->get();

		if($room->isEmpty()){
		$room =[];
		}

		$space_usage_id = '';
		$data = compact('space_usage_id', 'room');
		$view = view('search', $data);
		return $view;

	}


	public function spaceusageindex($area){

		$room =[];
		$query = new Facility;
		$query = Facility::join('addresses', 'addresses.id', '=', 'facilities.address_id')//エリア
										->leftjoin('spaces', 'spaces.facility_id', '=', 'facilities.id')//キャパシティー
										->join('space_space_usage', 'space_space_usage.space_id', '=', 'spaces.id');
		$query->leftjoin('plans', 'plans.space_id', '=', 'spaces.id');//プラン、費用
		$query->join('schedules', 'schedules.plan_id', '=', 'plans.id');


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

		//結合した条件でサーチ
		$room = $query->get();
		//dd($room);
		$space_usage_id = '';
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
		//dateofuse($day);//4月14日の場合
		$starttime =$request->starttime;
		$endtime =$request->endtime;
			//timebetween($starttime,$endtime);
		$men =$request->men;
		$space_usage_id = $request->space_usage_id;

		$query = new Facility;
		$query = Facility::join('addresses', 'addresses.id', '=', 'facilities.address_id')//エリア
										->join('spaces', 'spaces.facility_id', '=', 'facilities.id');//キャパシティー
										//->leftjoin('space_space_usage', 'space_space_usage.space_id', '=', 'spaces.id');
		//$query->join('plans', 'plans.space_id', '=', 'spaces.id');//プラン、費用
		//$query->join('schedules', 'schedules.plan_id', '=', 'plans.id');//開始時間、終了時間
		//エリア条件
		if(isset($area)){
			//都道府県サーチ
			$prefectures = new Prefecture;
			$prefectures = Prefecture::select('id','name')->where('name', 'like', "%$area%")->first();
			//存在した場合
			if(isset($prefectures)){

					$query->where('addresses.prefecture_id','=',$prefectures->id);
			//存在しない場合
			}else{
				 //市町村サーチ
				 	$query->where('addresses.address1', 'like', "%$area%")->orwhere('addresses.address2', 'like', "%$area%");
			}

		}

		//$room = $query->where('addresses.address1', 'like', "%$area%")->orwhere('addresses.address2', 'like', "%$area%")->get();
		//dd($room);
		//目的条件
		if(isset($space_usage_id)){
			//space_usageと紐づけされたspace_idを取得
			$spaces_id_usage= array();
			$spaces_id_space_usage = DB::table('space_space_usage')->select('space_id')->where('space_usage_id', '=', $space_usage_id)->distinct()->get();

			//dd($spaces_id_space_usage[0]->space_id);

			foreach ($spaces_id_space_usage as $value) {
				//array_push($spaces_id_usage,$value->space_id );
				$query->where('spaces.id', $value->space_id);
			}
		//dd($spaces_id_usage);


		}

		//spaces条件
		//キャパシティー
		//dd($men);
		if(isset($men)){

					$query->where('spaces.capacity', '>=', $men);

		}

		//plan条件
		//利用日
		//dd($day);
		if(isset($day)){
			//利用日
			$planday = new Plans;
			$planday = Plans::select('space_id')->where('plans.from','<=',$day)->where('plans.to','>=',$day)->get();

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
		//dd($room);

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
