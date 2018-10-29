<?php

namespace App\Http\Controllers\Mypage;

use App\Http\Controllers\Mypage\Controller as MypageController;

/**
 *
 */
class IndexController extends MypageController
{
	/**
	* トップページ
	*/
	public function index() {
		
		//echo password_hash('0000', PASSWORD_BCRYPT);
		//exit;
		
		
		//--トップのお知らせ用 モック用（仮）
		$data = array("todo"=>
		array(array("id"=>1,"title"=>"やることやることやることやることやること…","date"=>"2018-08-01")),
		"remess"=>
		array(array("id"=>1,"title"=>"未返信メッセージ未返信メッセージ未返信メ…","date"=>"2018-08-02"),array("id"=>2,"title"=>"未返信メッセージ未返信メッセージ未返信メ…","date"=>"2018-08-02"))
		,
		"rerec"=>array(),
		"redone"=>array()
		);
		
		$view = view('mypage.index', $data);
		return $view;
	}

	/**
	* like
	*/
	public function like() {
		
		$data = array(
		);
		
		$view = view('mypage.like', $data);
		return $view;
	}

	/**
	* like-new
	*/
	public function likeNew() {
		
		$data = array(
		);
		
		$view = view('mypage.like-new', $data);
		return $view;
	}

	/**
	* login
	*/
	public function login() {
		
		$data = array(
		);
		
		$view = view('mypage.login', $data);
		return $view;
	}

	/**
	* management
	*/
	public function management() {
		
		$data = array(
		);
		
		$view = view('mypage.management', $data);
		return $view;
	}

	/**
	* pass
	*/
	public function pass() {
		
		$data = array(
		);
		
		$view = view('mypage.pass', $data);
		return $view;
	}

	/**
	* register
	*/
	public function register() {
		
		$data = array(
		);
		
		$view = view('mypage.register', $data);
		return $view;
	}

	/**
	* review
	*/
	public function review() {
		
		$data = array(
		);
		
		$view = view('mypage.review', $data);
		return $view;
	}

	/**
	* topics
	*/
	public function topics() {
		
		$data = array(
		);
		
		$view = view('mypage.topics', $data);
		return $view;
	}

	/**
	* mailList
	*/
	public function maillist() {

		//--モック用（仮）
		$data=array();
		for($i=1;$i<=5;$i++){
			$data["maillist"][$i]=array("id"=>$i,"date"=>"2018-09-01 12:00:01","subject"=>"件名テキスト件名テキスト",
			"email"=>"xxxx@xxxxxx.ne.jp","name"=>"ＸＸＸＸＹＹＹＹ","text"=>"内容テキスト内容テキスト内容テキスト内容テキスト内容テキスト内容テキスト
			内容テキスト内容テキスト内容テキスト内容テキスト内容テキスト内容テキスト内容テキスト
			内容テキスト内容テキスト内容テキスト内容テキスト内容テキスト");
		}	
		$view = view('mypage.mailList', $data);
		return $view;
	}


}
