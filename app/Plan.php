<?php

namespace App;

use DB;
use Storage;
use App\MyModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
	use MyModel;

	protected $fillable = [
		'space_id', 'preorder_deadline_id', 'preorder_period_id',
		'name', 'price_per_hour', 'price_per_day',
		'need_to_be_approved',
		'from', 'to',
	];
	
	/**
	* relations
	*/	
	public function user() {
		return $this->belongsTo(User::class);
	}
	
	/**
	* 現在入力中のプラン取得
	*/
	public static function getCurrentPlan() {
		
		$plan = session('currentPlan', null);
		
		return $plan;
	}
	
	/**
	* 現在入力中のプラン設定
	*/
	public static function setCurrentPlan($plan) {
		
		session(['currentPlan' => $plan]);
		
	}
	
	/**
	* 保存
	*/
	public function saveAll($planDayList = null) {
		
		//保存
		$this->save();
		
		//貸出可能な曜日
		$idList = array();
		if ($planDayList) {
			foreach ($planDayList as $index => $planDayData) {
				
				$query = $this->planDays()
					->where('day_of_week', '=', $planDayData['day_of_week'])
					;
				
				$planDay = $query->first();
				if (!$planDay) {
					$planDay = new PlanDay();
				}
				$planDay->day_of_week = $planDayData['day_of_week'];
				$planDay->available = empty($planDayData['available']) ? 0 : 1;
				$planDay->hour_from = $planDayData['hour_from'];
				$planDay->hour_to = $planDayData['hour_to'];
				$this->planDays()->save($planDay);
				
				$idList = $planDay->id;
			}
		}
	}
	
	/**
	* 貸出可能な曜日リスト
	*/
	public function getPlanDayList() {
		
		$query = $this->planDays()
			;
		
		//day_of_weekを配列のキーとして取得
		$list = $query->get()->keyBy('day_of_week')->toArray();
		
		return $list;
		
	}
	
	/**
	* 価格
	*/
	public function getPrice() {
		
		$a = [];
		
		if ($this->by_hour) {
			$a[] = '￥' . number_format($this->charge_per_hour, 0) . '/時間';
		}
		
		if ($this->by_day) {
			$a[] = '￥' . number_format($this->charge_per_day, 0) . '/日';
		}
		
		return implode(' ', $a);
		
	}
	
	/**
	* 時間価格
	*/
	public function getChargePerHour() {
		
		//&yen;1,500円<span class="small_time">/時間～</span>
		
		$s = '&yen;' . number_format($this->charge_per_hour) . '円<span class="small_time">/時間～</span>';
		
		return $s;
	}
	
	/**
	* 一日価格
	*/
	public function getChargePerDay() {
		
		//&yen;1,500円<span class="small_time">/日～</span>
		
		$s = '&yen;' . number_format($this->charge_per_day) . '円<span class="small_time">/日～</span>';
		
		return $s;
	}
	
}
