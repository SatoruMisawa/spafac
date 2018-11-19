<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;

class Mailsent extends Mailable
{
  use Queueable, SerializesModels;

  public $to_user_id;
  public $from_user_id;
  public $message;
  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($to_user_id,$from_user_id,$message)
  {
      //
      $this->to_user_id = $to_user_id;
      $this->from_user_id = $from_user_id;
      $this->message = $message;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {

    $to_name = DB::table('users')->where('id',$this->to_user_id)
                        ->value('name');
    $from_name = DB::table('users')->where('id',$this->from_user_id)
                        ->value('name');
    $this->title = sprintf('メッセージが届いています。');
    $messagebox = $this->message;

    return /*$this->view('emails.messagesent')
        ->subject('メッセージが届いています。')
        ->with([
            'title' => $this->title,
            'to_name' => $to_name,
            'from_name' => $from_name,
            'messagebox' => $messagebox
          ]);*/
          $this->subject('メッセージが届いています')->text('email.verification');
  }
}
