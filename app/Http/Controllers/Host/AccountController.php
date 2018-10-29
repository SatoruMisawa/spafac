<?php

namespace App\Http\Controllers\Host;

use App\Http\Controllers\Host\Controller as HostController;
use Illuminate\Http\Request;
use App\Host;
use App\Prefecture;
use Auth;

/**
 *
 */
class AccountController extends HostController
{
	/**
	* 基本情報
	*/
	public function editBasic(Request $request) {
		
		$host = $this->loginUser()->host;
		
		$data = compact('host');
		
		$view = view('host.account.edit-basic', $data);
		return $view;
	}

	/**
	* 基本情報確認
	*/
	public function confirmBasic(Request $request) {
		
		$host = $this->loginUser()->host;
		
		$host->fillRequestData($request);
		
		//バリデート
		$validateRules = [
			'name1' => 'required',
			'name2' => 'required',
			'name1_kana' => 'required|zenkaku_kana',
			'name2_kana' => 'required|zenkaku_kana',
			'sex' => 'required',
			'tel' => 'required|tel',
			'birth_date' => 'required|date',
			'corporation' => 'required',
		];
		$validateMessages = [
		];
		$validator = \Validator::make($request->all(), $validateRules, $validateMessages);
		$customAttributes = [
			'name1' => '担当者氏名(姓)',
			'name2' => '担当者氏名(名)',
			'name1_kana' => '担当者氏名フリガナ(姓)',
			'name2_kana' => '担当者氏名フリガナ(名)',
		];
		$validator->addCustomAttributes($customAttributes);
		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
		}
		
		$host->user()->associate($this->loginUser());
		$host->save();
		return redirect()->to('host/account/edit-address')->with('message', '基本情報を更新しました。');
		
	}

	/**
	* 住所
	*/
	public function editAddress(Request $request) {
		
		$host = $this->loginUser()->host;
		
		//都道府県
		$prefectureList = Prefecture::array4Select();
		
		$data = compact('host', 'prefectureList');
		
		$view = view('host.account.edit-address', $data);
		return $view;
	}

	/**
	* 住所確認
	*/
	public function confirmAddress(Request $request) {
		
		$host = $this->loginUser()->host;
		
		$host->fillRequestData($request);
		
		//バリデート
		$validateRules = [
			'zip' => 'required|zip',
			'prefecture_id' => 'required',
			'address1' => 'required',
			'address1_kana' => 'required|zenkaku_kana',
			'address2' => 'required',
			'address2_kana' => 'required|zenkaku_kana',
			'address3' => 'nullable',
			'address3_kana' => 'nullable|zenkaku_kana',
		];
		$validateMessages = [
		];
		$validator = \Validator::make($request->all(), $validateRules, $validateMessages);
		$customAttributes = [
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
		
		$host->user()->associate($this->loginUser());
		$host->save();
		return redirect()->to('host/account/edit-bank')->with('message', '住所を更新しました。');
	}

	/**
	* 振込口座
	*/
	public function editBank(Request $request) {
		
		$host = $this->loginUser()->host;
		
		$data = compact('host');
		
		$view = view('host.account.edit-bank', $data);
		return $view;
	}

	/**
	* 振込口座確認
	*/
	public function confirmBank(Request $request) {
		$host = $this->loginUser()->host;
		
		$host->fillRequestData($request);
		
		//バリデート
		$validateRules = [
			'bank_name' => 'required',
			'bank_code' => 'required|digits:4',
			'bank_branch_name' => 'required',
			'bank_branch_code' => 'required|string|digits:3',
			'bank_account_number' => 'required|string|digits:7',
			'bank_account_name' => 'required',
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
		
		$host->user()->associate($this->loginUser());
		$host->save();
		return redirect()->to('host')->with('message', '振込口座を更新しました。');
	}

}
