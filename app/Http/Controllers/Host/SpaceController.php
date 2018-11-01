<?php

namespace App\Http\Controllers\Host;

use App\Address;
use App\Space;
use App\Purpose;
use App\KeyDelivery;
use App\Media;
use App\Http\Controllers\Host\Controller as HostController;
use Illuminate\Http\Request;

/**
 *
 */
class SpaceController extends HostController
{
	/**
	* トップページ
	*/
	public function index() {
		
		//スペース一覧
		$host = $this->loginUser()->host;
		$spaces = $host->getSpaces();
		
		$data = compact('spaces');
		
		$view = view('host.space.index', $data);
		return $view;
	}

	/**
	* 施設情報
	*/
	public function editInstitution(Request $request, $space = null) {
		
		if (!$space) {
			$space = Space::getNewSpace();
		}
		
		//編集中のスペースセット
		Space::setCurrentSpace($space);
		
		//施設一覧
		$host = $this->loginUser()->host;
		$institutions = $host->getInstitutions();
		
		$data = compact('space', 'institutions');
		
		$view = view('host.space.edit-institution', $data);
		return $view;
	}

	/**
	* 施設情報確認
	*/
	public function confirmInstitution(Request $request, $space = null) {
		
		$host = $this->loginUser()->host;
		if (!$space) {
			$space = new Space();
		}
		
		$space->fillRequestData($request);
		
		//バリデート
		$validateRules = [
			'institution_id' => 'required',
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
		
		$space->host()->associate($host);
		$space->setInputStatus(Space::INPUT_STATUS_INSTITUTION);
		$space->save();
		return redirect()->to('host/space/edit-basic/' . $space->id)->with('message', '施設情報を更新しました。');
	}

	public function create(Request $request) {
		$request->validate([
			'name' => 'required',
			'zip' => 'required|zip',
			// 'prefecture_id' => 'required', // todo: seed prefectures
			'address1' => 'required',
			'address1_ruby' => 'required',
			'address2' => 'required',
			'address2_ruby' => 'required',
			'address3_ruby' => 'required_with:address3',
			'latitude' => 'required',
			'longitude' => 'required',
			'access' => 'required',
			'tel' => 'required|tel',
		]);
		
		$address = Address::firstOrCreate([
			'prefecture_id' => 1,
			'zip' => $request->get('zip'),
			'address1' => $request->get('address1'),
			'address1_ruby' => $request->get('address1_ruby'),
			'address2' => $request->get('address2'),
			'address2_ruby' => $request->get('address2_ruby'),
			'address3' => $request->get('address3'),
			'address3_ruby' => $request->get('address3_ruby'),
			'latitude' => $request->get('latitude'),
			'longitude' => $request->get('longitude'),
		]);
		
		$address->spaces()->create([
			'name' => $request->get('name'),
			'access' => $request->get('access'),
			'tel' => $request->get('tel'),
		]);

		return redirect('/host');
	}

	/**
	* 基本情報
	*/
	public function editBasic(Request $request, $space) {
		
		$host = $this->loginUser()->host;
		if (!$space) {
			$space = new Space();
		}
		
		//編集中のスペースセット
		Space::setCurrentSpace($space);
		
		//用途リスト
		$purposes = Purpose::get4Select();
		
		//使用可能用途リスト
		$spacePurposeList = $space->getSpacePurposeList();
		
		//鍵の受け渡し方法
		$keyDeliveries = KeyDelivery::get4Select();
		
		$data = compact('space', 'purposes', 'spacePurposeList', 'keyDeliveries');
		
		$view = view('host.space.edit-basic', $data);
		return $view;
	}

	/**
	* 基本情報確認
	*/
	public function confirmBasic(Request $request, $space) {
		
		$host = $this->loginUser()->host;
		if (!$space) {
			$space = new Space();
		}
		
		$space->fillRequestData($request);
		$spacePurposeList = $request->input('spacePurposeList');
		
		//バリデート
		$validateRules = [
			'capacity' => 'required|integer',
			'floor_space' => 'required|integer',
			'key_delivery_id' => 'required|integer',
			'reservation_deadline' => 'required|integer',
			'reservation_acceptance' => 'required|integer',
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
		
		$space->host()->associate($host);
		$space->setInputStatus(Space::INPUT_STATUS_BASIC);
		$space->saveAll($spacePurposeList);
		return redirect()->to('host/space/edit-explanation/' . $space->id)->with('message', '基本情報を更新しました。');
	}

	/**
	* 説明文
	*/
	public function editExplanation(Request $request, $space) {
		
		$host = $this->loginUser()->host;
		if (!$space) {
			$space = new Space();
		}
		
		//編集中のスペースセット
		Space::setCurrentSpace($space);
		
		$data = compact('space');
		
		$view = view('host.space.edit-explanation', $data);
		return $view;
	}

	/**
	* 説明文確認
	*/
	public function confirmExplanation(Request $request, $space) {
		
		$host = $this->loginUser()->host;
		if (!$space) {
			$space = new Space();
		}
		
		$space->fillRequestData($request);
		
		//バリデート
		$validateRules = [
			'title' => 'required',
			'explanation' => 'required',
			'facility' => 'required',
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
		
		$space->host()->associate($host);
		$space->setInputStatus(Space::INPUT_STATUS_EXPLANATION);
		$space->save();
		return redirect()->to('host/space/edit-media/' . $space->id)->with('message', '説明文を更新しました。');
	}

	/**
	* 写真・動画
	*/
	public function editMedia(Request $request, $space) {
		
		$host = $this->loginUser()->host;
		if (!$space) {
			$space = new Space();
		}
		
		//編集中のスペースセット
		Space::setCurrentSpace($space);
		
		//写真リスト
		$spacePhotoList = $space->getSpacePhotoList();
		
		$data = compact('space', 'spacePhotoList');
		
		$view = view('host.space.edit-media', $data);
		return $view;
	}

	/**
	* 写真・動画確認
	*/
	public function confirmMedia(Request $request, $space) {
		
		$host = $this->loginUser()->host;
		if (!$space) {
			$space = new Space();
		}
		
		$space->fillRequestData($request);
		$spacePhotoList = $request->input('spacePhotoList');
		
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
		
		$space->host()->associate($host);
		$space->setInputStatus(Space::INPUT_STATUS_COMPLETE);
		$space->saveAll(null, $spacePhotoList);
		return redirect()->to('host/plan/' . $space->id)->with('message', '写真・動画を更新しました。');
	}

	/**
	* 画像
	*/
	public function media($media = null) {
		
		if ($media) {
			return $media->responseThumbnail(true, 135, 180);
		}
		
		//画像無し
		return Media::responseNoThumbnail(135, 180);
		
	}

	/**
	* 削除
	*/
	public function delete(Request $request, $space) {
		
		$host = $this->loginUser()->host;
		if ($space->host_id != $host->id) {
			abort(404);
		}
		
		$space->delete();
		return redirect()->to('host/space')->with('message', 'スペースを削除しました。');
		
	}

}
