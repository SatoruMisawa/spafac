<?php

namespace App\Http\Controllers\Mypage;

use App\Http\Controllers\Mypage\Controller as MypageController;
use Illuminate\Http\Request;
use App\Prefecture;
use App\Industory;
use App\Job;
use App\Media;

/**
 *
 */
class ProfileController extends MypageController
{
	/**
	* トップページ
	*/
	public function index() {
		
		//echo password_hash('0000', PASSWORD_BCRYPT);
		//exit;
		
		$data = array(
		);
		
		$view = view('mypage.profile.index', $data);
		return $view;
	}

	/**
	* edit-account
	*/
	public function editAccount() {
		
		$user = $this->loginUser();
		
		$data = compact('user');
		
		$view = view('mypage.profile.edit-account', $data);
		return $view;
	}

	/**
	* confirm-account
	*/
	public function confirmAccount(Request $request) {
		
		$user = $this->loginUser();
		
		$user->fillRequestData($request);

		//バリデート
		$validateRules = [
			'name' => 'required',
			'email' => 'required|email',
			'nickname' => 'required',
			'profile' => 'required',
		];
		$validateMessages = [
		];
		$validator = \Validator::make($request->all(), $validateRules, $validateMessages);
		$customAttributes = [
			'name' => '名前',
			'email' => 'メールアドレス',
			'nickname' => 'ニックネーム',
			'profile' => 'プロフィール',
		];
		$validator->addCustomAttributes($customAttributes);
		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
		}
		
		$user->save();
		return redirect()->to('mypage/profile/edit-account')->with('message', 'アカウント情報を更新しました。');
	}

	/**
	* edit-contact
	*/
	public function editContact() {
		
		$user = $this->loginUser();
		
		//都道府県
		$prefectureList = Prefecture::array4Select();
		
		//業種
		$industryList = Industory::array4Select();
		
		//職種
		$jobList = Job::array4Select();
		
		$data = compact('user', 'prefectureList', 'industryList', 'jobList');
		
		$view = view('mypage.profile.edit-contact', $data);
		return $view;
	}

	/**
	* confirm-contact
	*/
	public function confirmContact(Request $request) {
		
		$user = $this->loginUser();
		
		$user->fillRequestData($request);
		
		//バリデート
		$validateRules = [
			'name1' => 'required',
			'name2' => 'required',
			'tel' => 'required|tel',
			'industry_id' => '',
			'job_id' => '',
			'corporation' => '',
			'corporation_name' => 'required_if:corporation,1',
			'department_name' => '',
			'zip' => 'required|zip',
			'prefecture_id' => 'required',
			'address1' => 'required',
			'address2' => 'required',
			'address3' => '',
		];
		$validateMessages = [
			'corporation_name.required_if' => '法人の場合、法人・団体名は必須です。',
		];
		$validator = \Validator::make($request->all(), $validateRules, $validateMessages);
		$customAttributes = [
			'corporation' => '法人・団体',
			'corporation_name' => '法人・団体名',
		];
		$validator->addCustomAttributes($customAttributes);
		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
		}
		
		$user->save();
		return redirect()->to('mypage/profile/edit-contact')->with('message', '連絡先情報を更新しました。');
	}

	/**
	* edit-mail
	*/
	public function editMail() {
		
		$user = $this->loginUser();
		
		$data = compact('user');
		
		$view = view('mypage.profile.edit-mail', $data);
		return $view;
	}

	/**
	* confirm-mail
	*/
	public function confirmMail(Request $request) {
		
	}

	/**
	* edit-password
	*/
	public function editPassword() {
		
		$user = $this->loginUser();
		
		$data = compact('user');
		
		$view = view('mypage.profile.edit-password', $data);
		return $view;
	}

	/**
	* confirm-password
	*/
	public function confirmPassword(Request $request) {
		
		$user = $this->loginUser();
		
		//$user->fillRequestData($request);
		
		//バリデート
		$validateRules = [
			'old_password' => 'password-verify:' . $user->password,
			'new_password' => 'required|between:8,20|confirmed',
			'new_password_confirmation' => 'required',
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
		
		$user->password = $request->input('new_password');
		$user->save();
		return redirect()->to('mypage/profile/edit-password')->with('message', 'パスワードを変更しました。');
	}
	
	/**
	* アバター
	*/
	public function avatar(Request $request, $width = 200, $height = 200, $fit = true) {
		
		$user = $this->loginUser();
		if (!$user) {
			abort(404);
		}
		
		$media = Media::find($user->profile_media_id);
		
		if ($media) {
			return $media->responseThumbnail($fit, $width, $height);
		}
		
		//画像無し
		//assets/mypage/img/avatar.jpg
		
		$path = 'assets/mypage/img/avatar.jpg';
		return Media::responseImageFile($path, $width, $height);
		
	}
	
}
