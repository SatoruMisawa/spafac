<?php

namespace App\Http\Controllers;

use App\Purpose;
use App\Plans;
use App\Space;
use App\Facility;
use App\Prefecture;

use Illuminate\Support\Facades\DB;

/**
 *
 */
class IndexController extends FrontController
{
	/**
	 * トップページ
	 */
	public function index()
	{

		$query = [];
		for ($i = 1; $i < 13; $i++) {


				/*$space = new Facility;
				$space = Facility::join('addresses', 'addresses.id', '=', 'facilities.address_id')//エリア
																->join('spaces', 'spaces.facility_id', '=', 'facilities.id')//キャパシティー
																->join('space_space_usage', 'space_space_usage.space_id', '=', 'spaces.id')->first();

				//dd($space->space_id);
				$space_space_usage = DB::table('space_attachments')->where('space_id','=',$space->space_id )->first();*/
				//dd($space_space_usage->id);
			$query[$i] = new Facility;
			$query[$i] = Facility::join('addresses', 'addresses.id', '=', 'facilities.address_id')//エリア
				->join('spaces', 'spaces.facility_id', '=', 'facilities.id')//キャパシティー
				->join('space_space_usage', 'space_space_usage.space_id', '=', 'spaces.id')
				->leftjoin('space_attachments', function ($join) {
					$join->on('space_attachments.space_id', '=', 'spaces.id');
																		//->where('space_attachments.id', '=', 1);
				})
				->where('space_space_usage.space_usage_id', '=', $i)->limit(3)->get();
		}

		$best = new Facility;
		$best = Facility::join('addresses', 'addresses.id', '=', 'facilities.address_id')//エリア
									->join('spaces', 'spaces.facility_id', '=', 'facilities.id')//キャパシティー
									->join('space_space_usage', 'space_space_usage.space_id', '=', 'spaces.id')
									->leftjoin('space_attachments', function ($join) {
										$join->on('space_attachments.space_id', '=', 'spaces.id');
																							//->where('space_attachments.id', '=', 1);
									})
									->limit(3)->get();
				//dd($query);
				//$view = view('coming-soon', $data);
				//$data = compact('goods','party','office','promotion','event','performance','stay','location','weddinghall','parking','sports');
		$data = compact('query','best');
		$view = view('index', $data);
		return $view;
	}

	/**
	 * お問い合わせ
	 */
	public function inquiry()
	{

		$data = array();

		$view = view('inquiry', $data);
		return $view;
	}

	/**
	 * ご利用ガイド
	 */
	public function guide()
	{

		$data = array();

		$view = view('guide', $data);
		return $view;
	}

	/**
	 * サービスの利用規約
	 */
	public function termsOfservice()
	{

		$data = array();

		$view = view('terms-of-service', $data);
		return $view;
	}

	/**
	 * スタッフのイチオシスペース
	 */
	public function recommendation()
	{

		$data = array();

		$view = view('recommendation', $data);
		return $view;
	}

	/**
	 * スペース登録規約
	 */
	public function registrationContract()
	{

		$data = array();

		$view = view('registration-contract', $data);
		return $view;
	}

	public function privacyPolicy()
	{

		$data = array();

		$view = view('privacy-policy', $data);
		return $view;
	}

	public function companyProfile()
	{

		$data = array();

		$view = view('company-profile', $data);
		return $view;
	}

	public function commercialTransactionLaw()
	{

		$data = array();

		$view = view('commercial-transaction-law', $data);
		return $view;
	}

	public function login()
	{

		$data = array();

		$view = view('login', $data);
		return $view;
	}

	public function comingSoon()
	{

		$data = array();

		$view = view('coming-soon', $data);
		return $view;
	}


	/**
	 * MOCK用　みさわ追加
	 */
	public function event_types()
	{//目的別ページ
		$data = array();

		$view = view('event_types', $data);
		return $view;
	}
	public function areas()
	{//エリアから探す
		$data = array();
		$view = view('areas', $data);
		return $view;
	}
	public function capacities()
	{//収容人数から探す
		$data = array();
		$view = view('capacities', $data);
		return $view;
	}
	public function space_types()
	{//会場タイプから探す
		$data = array();
		$view = view('space_types', $data);
		return $view;
	}
	public function amenities()
	{//設備で探す
		$data = array();
		$view = view('amenities', $data);
		return $view;
	}
	public function category()
	{//カテゴリで探す
		$data = array();
		$view = view('category', $data);
		return $view;
	}
	public function keywords()
	{//キーワードで探す
		$data = array();
		$view = view('keywords', $data);
		return $view;
	}
	public function party()
	{//パーティページ（つかわなくなった）
		$data = array();
		$view = view('party', $data);
		return $view;
	}

	//--目的別ページスイッチ
	public function purpose($page = "", $space_usage_id)
	{


		$page_name = array("party" => "飲食・パーティー", "meeting" => "オフィス・会議", "lodging" => "宿泊", "location" => "ロケ撮影･写真･動画", "specialevent" => "イベント", "performance" => "演奏", "exhibitionhall" => "展示会", "sports" => "スポーツ", "office" => "オフィス", "parking" => "駐車場", "wedding" => "結婚式･お祝いシーン", "other" => "その他", "food" => "飲食", "sales" => "物販", "exhibition" => "催事･展示会", "event" => "イベントプロモーション・広告", "ad" => "広告・宿泊", "servicepack" => "プレミアムサービスパック");
		$query = Facility::join('addresses', 'addresses.id', '=', 'facilities.address_id')//エリア
			->join('spaces', 'spaces.facility_id', '=', 'facilities.id')//キャパシティー
			->join('space_space_usage', 'space_space_usage.space_id', '=', 'spaces.id')
			->where('space_space_usage.space_usage_id', '=', $space_usage_id)->limit(3)->get();

		//dd($query);
		//dd($query);
		//$view = view('coming-soon', $data);
		//$data = compact('goods','party','office','promotion','event','performance','stay','location','weddinghall','parking','sports');
		$data = compact('query', 'page', 'page_name');


		$view = view('purpose', $data);
		return $view;
	}
	//--空き状況確認
	public function whats_about()
	{
		$data = array();
		$view = view('whats_about', $data);
		return $view;
	}
	//--　予約確認
	public function request_chk()
	{
		$data = array();
		$view = view('request_chk', $data);
		return $view;
	}
	//--　予約完了
	public function request_done()
	{
		$data = array();
		$view = view('request_done', $data);
		return $view;
	}
	//--宿泊ページ系
	public function stay()
	{
		$data = array();
		$view = view('stay', $data);
		return $view;
	}
	public function stay_details()
	{
		$data = array();
		$view = view('stay_details', $data);
		return $view;
	}
	//--宿泊規約系
	public function lodging_agreement()
	{
		$data = array();
		$view = view('lodging_agreement', $data);
		return $view;
	}
	public function lodging_agreement_guests()
	{
		$data = array();
		$view = view('lodging_agreement_guests', $data);
		return $view;
	}
	//決済の流れ
	public function flow_of_settlement()
	{
		$data = array();
		$view = view('flow_of_settlement', $data);
		return $view;
	}
	//メルマガ購読手続き完了
	public function mailmaga_done()
	{
		$data = array();
		$view = view('mailmaga_done', $data);
		return $view;
	}



	//
	public function help()
	{
		$data = array();
		$view = view('help', $data);
		return $view;
	}

	 //採用情報
	// index () {
	// 	return view('recruit');
	// }
}
