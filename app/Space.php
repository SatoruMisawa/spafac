<?php

namespace App;

use DB;
use Storage;
use App\MyModel;
use App\Plan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Space extends Model
{
	use MyModel;
	// use SoftDeletes;
	
	//入力状況
	const INPUT_STATUS_NONE = 0;
	const INPUT_STATUS_INSTITUTION = 1;
	const INPUT_STATUS_BASIC = 2;
	const INPUT_STATUS_EXPLANATION = 3;
	const INPUT_STATUS_COMPLETE = 4;
	
	//
	public static $reservationDeadlines = [
		0 => '利用日当日',
		1 => '利用日の1日前',
		2 => '利用日の2日前',
		3 => '利用日の3日前',
		7 => '利用日の7日前',
		14 => '利用日の14日前',
	];
	
	public static $reservationAcceptances = [
		3 => '3ヶ月先まで予約を受け付ける',
		6 => '6ヶ月先まで予約を受け付ける',
		9 => '9ヶ月先まで予約を受け付ける',
		12 => '12ヶ月先まで予約を受け付ける',
	];
	
	protected $fillable = [
		'user_id', 'facility_id', 'space_usage_id',
		'key_delivery_id', 'plan_id',
		'capacity', 'floor_area',
	];
	
	/**
	* relations
	*/
	public function institution() {
		return $this->belongsTo('App\Institution');
	}
	public function host() {
		return $this->belongsTo('App\Host');
	}
	public function spacePurposes() {
		return $this->hasMany('App\SpacePurpose');
	}
	public function spacePhotos() {
		return $this->hasMany('App\SpacePhoto');
	}
	
	/**
	* 選択肢
	*/
	public static function get4Select() {
		
		$query = static::query()
			->select('id', 'name')
			->orderBy('display_order', 'ASC')
			->orderBy('id', 'ASC')
			;
		
		$purposes = $query->get();
		
		return $purposes;
	}
	
	/**
	* 選択肢
	*/
	public static function array4Select() {
		
		$query = static::query()
			->select('id', 'name')
			->orderBy('display_order', 'ASC')
			->orderBy('id', 'ASC')
			;
		
		$list = $query->pluck('name', 'id')->toArray();
		
		return $list;
	}
	
	/**
	* 住所
	*/
	public function getAddress() {
		
		$address = $this->prefecture->name . $this->address1 . $this->address2 . $this->address3;
		
		return $address;
	}
	
	/**
	* 使用可能用途リスト
	*/
	public function getSpacePurposeList() {
		
		$query = $this->spacePurposes()
			->select('id', 'purpose_id')
			;
		$list = $query->pluck('id', 'purpose_id')->toArray();
		
		return $list;
		
	}
	
	/**
	* 使用可能用途
	*/
	public function getSpacePurposes() {
		
		$query = $this->spacePurposes()
			->select('space_purposes.*')
			->join('purposes', 'space_purposes.purpose_id', '=', 'purposes.id')
			->orderBy('purposes.display_order', 'ASC')
			;
		$spacePurposes = $query->get();
		
		return $spacePurposes;
		
	}
	
	/**
	* 写真リスト
	*/
	public function getSpacePhotoList() {
		
		$query = $this->spacePhotos()
			->select('id', 'media_id')
			->orderBy('display_order', 'ASC')
			;
		
		$spacePhotoList = $query->get()->toArray();
		
		return $spacePhotoList;
		
	}
	
	/**
	* 写真リスト
	*/
	public function getSpacePhotos() {
		
		$query = $this->spacePhotos()
			->orderBy('display_order', 'ASC')
			;
		
		$spacePhotos = $query->get();
		
		return $spacePhotos;
	}
	
	/**
	* 保存
	*/
	public function saveAll($spacePurposeList = null, $spacePhotoList = null) {
		
		//保存
		$this->save();
		
		//使用可能用途保存
		$idList = array();
		if ($spacePurposeList) {
			foreach ($spacePurposeList as $purposeId => $checked) {
				$query = $this->spacePurposes()
					->where('purpose_id', '=', $purposeId)
					;
				
				$id = $query->value('id');
				if (!$id) {
					//なければ保存
					$spacePurpose = new SpacePurpose();
					$spacePurpose->purpose_id = $purposeId;
					$this->spacePurposes()->save($spacePurpose);
					$id = $spacePurpose->id;
				}
				$idList[] = $id;
			}
		}
		
		//なくなった使用可能用途を削除
		$query = $this->spacePurposes();
		if ($idList) {
			$query->whereNotIn('id', $idList);
		}
		$query->delete();
		
		//写真
		$idList = array();
		$displayOrder = 0;
		if ($spacePhotoList) {
			foreach ($spacePhotoList as $data) {
				$spacePhoto = SpacePhoto::find($data['id']);
				if (!$spacePhoto) {
					$spacePhoto = new SpacePhoto();
					$spacePhoto->id = $data['id'];
				}
				$spacePhoto->media_id = $data['media_id'];
				$spacePhoto->display_order = ++$displayOrder;
				$this->spacePhotos()->save($spacePhoto);
				$idList[] = $spacePhoto->id;
			}
		}
		//なくなったデータを削除
		$query = $this->spacePhotos();
		if ($idList) {
			$query->whereNotIn('id', $idList);
		}
		$query->delete();
		

	}
	
	/**
	* 入力状況設定
	*/
	public function setInputStatus($inputStatus) {
		
		if (!$this->input_status) {
			$this->input_status = static::INPUT_STATUS_NONE;
		}
		$this->input_status = max($this->input_status, $inputStatus);
		
	}
	
	/**
	* 新規入力中のスペース取得
	*/
	public static function getNewSpace() {
		
		$query = static::query()
			->where('input_status', '<', static::INPUT_STATUS_COMPLETE)
			->orderBy('id', 'ASC');
			;
		
		$space = $query->first();
		
		if (!$space) {
			$space = new self;
		}
		
		return $space;
	}
	
	/**
	* 現在入力中のスペース取得
	*/
	public static function getCurrentSpace() {
		
		$space = session('currentSpace', null);
		if (!$space) {
			$space = static::getNewSpace();
		}
		
		return $space;
	}
	
	/**
	* 現在入力中のスペース設定
	*/
	public static function setCurrentSpace($space) {
		
		session(['currentSpace' => $space]);
		
	}
	
	/**
	* スペースタイトル
	*/
	public function getTitle() {
		
		if ($this->input_status < static::INPUT_STATUS_EXPLANATION) {
			return '新規スペース';
		}
		
		return $this->title;
	}
	
	/**
	* プラン一覧
	*/
	public function getPlans() {
		
		$query = $this->plans()
			->orderBy('id', 'ASC');
		
		$plans = $query->get();
		
		return $plans;
	}
	
	/**
	* 検索
	*/
	public static function search() {
		
		$query = static::query()
			->orderBy('id', 'ASC')
			;
		
		$spaces = $query->paginate(2);
		
		return $spaces;

	}
	
	/**
	* 価格
	*/
	public function getPriceRange() {
		
		//&yen;100～1,500円<span class="small_time">/時間</span>
		
		$ranges = [];
		
		$query = $this->plans()
			->select(DB::raw("count(id) as cnt, min(charge_per_hour) AS min_charge_per_hour, max(charge_per_hour) AS max_charge_per_hour"))
			->where("by_hour", "=", 1)
			;
		
		$plan = $query->first();
		if ($plan && $plan->cnt > 0) {
			$prices = [];
			$prices[] = number_format($plan->min_charge_per_hour);
			if ($plan->min_charge_per_hour != $plan->max_charge_per_hour) {
				$prices[] = number_format($plan->max_charge_per_hour);
			}
			$ranges[] = '&yen;' . implode('～', $prices) . '円<span class="small_time">/時間</span>';
		}
		
		//&yen;100～1,500円<span class="small_time">/日</span>
		
		
		$query = $this->plans()
			->select(DB::raw("count(id) as cnt, min(charge_per_day) AS min_charge_per_day, max(charge_per_day) AS max_charge_per_day"))
			->where("by_day", "=", 1)
			;
		
		$plan = $query->first();
		if ($plan && $plan->cnt > 0) {
			$prices = [];
			$prices[] = number_format($plan->min_charge_per_day);
			if ($plan->min_charge_per_day != $plan->max_charge_per_day) {
				$prices[] = number_format($plan->max_charge_per_day);
			}
			$ranges[] = '&yen;' . implode('～', $prices) . '円<span class="small_time">/日</span>';
		}
		
		return implode('<br>', $ranges);
	}
	
	/*
	* メディアID
	*/
	public function getMediaId() {
		
		$query = $this->SpacePhotos()
			->orderBy('display_order', 'ASC')
			;
		
		$spacePhoto = $query->first();
		
		if (!$spacePhoto) {
			return null;
		}
		
		return $spacePhoto->media_id;
		
	}
	
	
}
