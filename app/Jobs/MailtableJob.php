<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Mail\MailSent;
use App\User;

class MailtableJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $to_user_id;
    public $from_user_id;
    public $message;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($to_user_id,$from_user_id,$message)
    {
        $this->to_user_id = $to_user_id;
        $this->from_user_id = $from_user_id;
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
      $to_mail= DB::table('users')->where('id',$this->to_user_id)->value('email');
      Mail::to($to_mail)->send(new MessageSent($this->to_user_id,$this->from_user_id,$this->message));

    }
}
