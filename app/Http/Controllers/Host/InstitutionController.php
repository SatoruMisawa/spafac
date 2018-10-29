<?php

namespace App\Http\Controllers\Host;

use App\Http\Controllers\Host\Controller as HostController;
use Illuminate\Http\Request;
use App\Host;
use App\Institution;
use App\InstitutionKind;
use App\Prefecture;
use Auth;

/**
 *
 */
class InstitutionController extends HostController
{
	/**
	* 施設一覧
	*/
	public function index() {
		
		//施設一覧
		$host = $this->loginUser()->getHost();
		$institutions = $host->getInstitutions();
		
		$data = compact('institutions');
		
		$view = view('host.institution.index', $data);
		return $view;
	}

	/**
	* 施設情報
	*/
	public function edit(Request $request, $institution = null) {
		
		if (!$institution) {
			$institution = new Institution();
		}
		
		//施設種類
		$institutionKinds = InstitutionKind::get4Select();
		
		//都道府県
		$prefectureList = Prefecture::array4Select();
		
		$data = compact('institution', 'institutionKinds', 'prefectureList');
		
		$view = view('host.institution.edit', $data);
		return $view;
	}

	/**
	* 施設情報確認
	*/
	public function confirm(Request $request, $institution = null) {
		
		$host = $this->loginUser()->getHost();
		if (!$institution) {
			$institution = new Institution();
		}
		
		$institution->fillRequestData($request);
		
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
			'latitude' => 'required|numeric',
			'longitude' => 'required|numeric',
			'access' => 'required',
			'tel' => 'required|tel',
			'institution_kind_id' => 'required',
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
			'latitude' => '地図の設定',
			'longitude' => '地図の設定',
		];
		$validator->addCustomAttributes($customAttributes);
		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
		}
		
		$institution->host()->associate($host);
		$institution->save();
		return redirect()->to('host/institution')->with('message', '施設情報を更新しました。');
		
	}

	/**
	* 施設情報
	*/
	public function delete(Request $request, $institution) {
		
		$host = $this->loginUser()->getHost();
		if ($institution->host_id != $host->id) {
			abort(404);
		}
		
		$institution->delete();
		return redirect()->to('host/institution')->with('message', '施設情報を削除しました。');
		
	}

}
