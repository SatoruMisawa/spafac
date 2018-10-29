<?php

namespace App\Http\Controllers\Host;

use App\Http\Controllers\Host\Controller as HostController;
use Illuminate\Http\Request;
use App\Plan;
use App\Space;
use App\Purpose;
use App\KeyDelivery;
use App\Media;

/**
 *
 */
class PlanController extends HostController
{
	/**
	* トップページ
	*/
	public function index(Request $request, $space) {
		
		//プラン一覧
		$plans = $space->getPlans();
		
		$data = compact('space', 'plans');
		
		$view = view('host.plan.index', $data);
		return $view;
	}

	/**
	* プラン情報編集
	*/
	public function edit(Request $request, $space, $plan = null) {
		
		if (!$plan) {
			$plan = new Plan();
		}
		
		//貸出可能な曜日リスト
		$planDayList = $plan->getPlanDayList();
		
		//編集中のプランセット
		Space::setCurrentSpace($space);
		Plan::setCurrentPlan($plan);
		
		$data = compact('space', 'plan', 'planDayList');
		
		$view = view('host.plan.edit', $data);
		return $view;
	}

	/**
	* プラン情報確認
	*/
	public function confirm(Request $request, $space, $plan = null) {
		
		if (!$plan) {
			$plan = new Plan();
		}
		
		$plan->fillRequestData($request);
		$planDayList = $request->input('planDayList');
		
		//バリデート
		$validateRules = [
			'name' => 'required',
			'by_hour' => '',
			'charge_per_hour' => 'required_if:by_hour,1|nullable|integer|min:1',
			'by_day' => '',
			'charge_per_day' => 'required_if:by_day,1|nullable|integer|min:1',
			'approve_reservation' => 'required',
			'planDayList.*.available' => '',
			'planDayList.*.hour_from' => 'required_if:planDayList.*.available,1|nullable|integer',
			'planDayList.*.hour_to' => 'required_if:planDayList.*.available,1|nullable|integer',
			'period_from' => 'nullable|date',
			'period_to' => 'nullable|date',
		];
		$validateMessages = [
		];
		$validator = \Validator::make($request->all(), $validateRules, $validateMessages);
		$customAttributes = [
			'name' => 'プランの名称',
			'by_hour' => '時間価格',
			'charge_per_hour' => '時間価格',
			'by_day' => '一日価格',
			'charge_per_day' => '一日価格',
			'approve_reservation' => '予約の承認方法',
			'planDayList.*.available' => '有効',
			'planDayList.*.hour_from' => '時間帯(始)',
			'planDayList.*.hour_to' => '時間帯(終)',
			'period_from' => '期間(始)',
			'period_to' => '期間(終)',
		];
		$validator->addCustomAttributes($customAttributes);
		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
		}
		
		$plan->space()->associate($space);
		$plan->saveAll($planDayList);
		//return redirect()->to('host/plan/edit-option/' . $space->id . '/' . $plan->id)->with('message', 'プラン情報を更新しました。');
		return redirect()->to('host/plan/' . $space->id)->with('message', 'プランを更新しました。');
	}

	/**
	* オプション編集
	*/
	public function editOption(Request $request, $space, $plan) {
		
		if (!$plan) {
			$plan = new Plan();
		}
		
		//編集中のプランセット
		Space::setCurrentSpace($space);
		Plan::setCurrentPlan($plan);
		
		$data = compact('space', 'plan');
		
		$view = view('host.plan.edit-option', $data);
		return $view;
	}

	/**
	* オプション確認
	*/
	public function confirmOption(Request $request, $space, $plan) {
		
		if (!$plan) {
			$plan = new Plan();
		}
		
		$plan->fillRequestData($request);
		
		//バリデート
		$validateRules = [
		];
		$validateMessages = [
		];
		$validator = \Validator::make($request->all(), $validateRules, $validateMessages);
		$customAttributes = [
		];
		$validator->addCustomAttributes($customAttributes);
		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
		}
		
		$plan->space()->associate($space);
		$plan->save();
		return redirect()->to('host/space/' . $space->id)->with('message', 'オプションを更新しました。');
	}

	/**
	* プラン情報削除
	*/
	public function delete(Request $request, $space, $plan) {
		
		$host = $this->loginUser()->getHost();
		if ($space->host_id != $host->id) {
			abort(404);
		}
		if ($plan->space_id != $space->id) {
			abort(404);
		}
		
		$plan->delete();
		return redirect()->to('host/plan/' . $space->id)->with('message', 'プランを削除しました。');
		
	}

}
