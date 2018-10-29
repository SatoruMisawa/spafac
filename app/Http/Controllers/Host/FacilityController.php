<?php

namespace App\Http\Controllers\Host;

use App\Http\Controllers\Host\Controller as HostController;
use Illuminate\Http\Request;
use App\Host;
use App\Facility;
use App\FacilityKind;
use App\Prefecture;
use Auth;

/**
 *
 */
class FacilityController extends HostController
{
	/**
	* 施設一覧
	*/
	public function index() {
		
		//施設一覧
		$host = $this->loginUser()->host;
		$facilities = $host->getFacilities();
		
		$data = compact('facilities');
		
		$view = view('host.facility.index', $data);
		return $view;
	}

	/**
	* 施設情報
	*/
	public function edit(Request $request, $facility = null) {
		
		if (!$facility) {
			$facility = new Facility();
		}
		
		//施設種類
		$facilityKinds = FacilityKind::get4Select();
		
		//都道府県
		$prefectureList = Prefecture::array4Select();
		
		$data = compact('facility', 'facilityKinds', 'prefectureList');
		
		$view = view('host.facility.edit', $data);
		return $view;
	}

	/**
	* 施設情報確認
	*/
	public function confirm(Request $request, $facility = null) {
		
		$host = $this->loginUser()->host;
		if (!$facility) {
			$facility = new Facility();
		}
		
		$facility->fillRequestData($request);
		
		//バリデート
		$validateRules = [
			'name' => 'required',
			'zip' => 'required|zip',
			'prefecture_id' => 'required',
			'address1' => 'required',
			'address1_kana' => 'required|zenkaku_kana',
			'address2' => 'required',
			'address2_kana' => 'required|zenkaku_kana',
			'address3' => 'nullable',
			'address3_kana' => 'nullable|zenkaku_kana',
			'access' => 'required',
			'tel' => 'required|tel',
			'facility_kind_id' => 'required',
		];
		$validateMessages = [
		];
		$validator = \Validator::make($request->all(), $validateRules, $validateMessages);
		$customAttributes = [
			'name' => '施設名',
			'address1' => '市区町村',
			'address1_kana' => '市区町村フリガナ',
			'address2' => '町名・番地',
			'address2_kana' => '町名・番地フリガナ',
			'address3' => 'ビル名・部屋番号',
			'address3_kana' => 'ビル名・部屋番号フリガナ',
		];
		$validator->addCustomAttributes($customAttributes);
		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
		}
		
		$facility->host()->associate($host);
		$facility->save();
		return redirect()->to('host/facility')->with('message', '施設情報を更新しました。');
		
	}

}
