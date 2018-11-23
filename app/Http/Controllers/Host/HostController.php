<?php

namespace App\Http\Controllers\Host;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Exception;

class HostController extends Controller
{
    public function index() {


      $todo  =array();
      $rerec =array();
      $redone=array();
      $maillist= $this->maillist_index();

      //dd($maillist);

      $data = compact(/*'space', 'address',*/'maillist','todo','rerec','redone');


		try {

      $view = view('host.index', $data);
      
      return $view;
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }


	}



public function maillist_index() {


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

  //$view = view('mypage.mailList', compact('maillist'));
  return $maillist;

}
}
