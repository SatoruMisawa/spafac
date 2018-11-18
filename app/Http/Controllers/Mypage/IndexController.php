<?php

namespace App\Http\Controllers\Mypage;

use App\Http\Controllers\Mypage\Controller as MypageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\MailtableModel;
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


		$thread_id = DB::table('mailtable')
		->select('thread_id')
		->distinct()
		->where('to_user_id', Auth::id())
		->orWhere('from_user_id', Auth::id())
		->get();

		$maillist = [];

		foreach($thread_id as $t_id)
		{
				$to_user_id = DB::table('mailtable')
				->select('to_user_id')
				->where('thread_id', $t_id->thread_id)
				->where('to_user_id', '!=', Auth::id())
				->first();

				$from_user_id = DB::table('mailtable')
				->select('from_user_id')
				->where('thread_id', $t_id->thread_id)
				->where('from_user_id', '!=', Auth::id())
				->first();

				if(!is_null($to_user_id) || !is_null($from_user_id))
				{

						$user_id;

						if (boolval($to_user_id))
						{
								$user_id = $to_user_id->to_user_id;
						}
						else
						{
								$user_id = $from_user_id->from_user_id;
						}

						$name = DB::table('users')
						->select('name')
						->where('id', $user_id)
						->value('name');

						$content;
						$content = DB::table('mailtable')->select('content')->where('thread_id', $t_id->thread_id)->orderBy('send_date', 'asc')->first();
						$id = $user_id;
						array_push($maillist, compact('content','id', 'name'));
				}
		}

		$view = view('mypage.mailList', compact('maillist'));
		return $view;

	}

  public function mailtable($id){

		// メッセージの取得
		$data = $this->getMessageDataByUID($id);


		$view = view('mypage.mailtable', $data);
		return $view;
	}


	public function sendmail($paraid, Request $request){

		// 取得したIDを復号化
	 	$decrypted_id = $request->send_to;

		// 新規会話かチェック
		$from_thread = DB::table('mailtable')
		->select('thread_id')
		->where('to_user_id', $decrypted_id)
		->where('from_user_id', Auth::id())
		->first();

		$to_thread = DB::table('mailtable')
		->select('thread_id')
		->where('to_user_id', Auth::id())
		->where('from_user_id', $decrypted_id)
		->first();


		$send_message = $request->content;

		if(is_null($from_thread) && is_null($to_thread))
		{

				DB::transaction(function() use($send_message, $decrypted_id){
						$newThread = DB::table('mailtable')
						->lockForUpdate()
						->max('thread_id');

						$thread = $newThread + 1;

						$this->insertMessage($thread, $send_message, $decrypted_id, Auth::id());
				});
		}
		else
		{
			//	logger('exist');
				// thread_idを取得
				$id;
				// firstで取得して結果が0件の場合、Nullが返ってくるためNullでチェック
				if (boolval($to_thread))
				{
						$id = $to_thread;
				}
				else
				{
						$id = $from_thread;
				}

				// スレッド番号を取得
				$thread = $id->thread_id;

				$this->insertMessage($thread, $send_message, $decrypted_id, Auth::id());
		}

		$data = $this->getMessageDataByUID($paraid);

		// 取得した値をビューに反映し、Responseとして返す

		$view = view('mypage.mailtable', $data);
		return $view;
	}

	private function getMessageDataByUID ($id)
	{
			// 取得したIDを復号化
			$decrypted_id = $id;

			// 送信先、送信元のユーザを指定してthread_idを取得
			$send_thread = DB::table('mailtable')
			->select('thread_id')
			->where('to_user_id', $decrypted_id)
			->where('from_user_id', Auth::id())
			->first();

			$receive_thread = DB::table('mailtable')
			->select('thread_id')
			->where('to_user_id', Auth::id())
			->where('from_user_id', $decrypted_id)
			->first();

			// 相手の名前を取得
			$name = DB::table('users')
					->select('name')
					->where('id', $decrypted_id)
					//->first();
					->value('name');

			$thread_id;
			$mailtable;

			if(is_null($send_thread) && is_null($receive_thread))
			{
					$mailtable = null;
			}
			else
			{

					if(boolval($send_thread))
					{
							$thread_id = $send_thread->thread_id;
					}
					else
					{
							$thread_id = $receive_thread->thread_id;
					}

					// 会話ID毎にメッセージを取得
					$mailtable = DB::table('mailtable')
					->select('content', 'from_user_id', 'to_user_id', 'send_date')
					->where('thread_id', $thread_id)
					->orderBy('send_date', 'asc')
					->get();


			}

		return compact('mailtable', 'name', 'id');

	}



	public function insertMessage($thread_id, $message, $to_user_id, $from_user_id)
	{
			// メッセージの登録
			DB::table('mailtable')->insert(
					[
							'thread_id' => $thread_id,
							'content' => $message,
							'to_user_id' => $to_user_id,
							'from_user_id' => $from_user_id,
							// 現在時刻を取得
							'send_date' => now()
					]
				);

				//メールを発火
				if (Auth::check('id',$to_user_id)) {
					//ログインしている場合
					$this->dispatch(new MessageJob($to_user_id,$from_user_id,$message));
				}else{
					//ログインしていない場合
					//broadcast(new AccessDetection($to_user_id,$from_user_id));
				}

	}



}
