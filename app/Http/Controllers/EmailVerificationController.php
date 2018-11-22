<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\EmailVerification;
use Mail;
use Illuminate\Http\Request;

class EmailVerificationController extends Controller
{
    public function send(User $user) {
        try {
            $user->prepareToVerifyEmail();
            Mail::to($user->email)->send(new EmailVerification($user));
            
            return redirect()->route('index')->with('message', '確認メールを送信しました。');
        } catch (\Exception $e) {
            report($e);
            return redirect()->route('index')->withErrors([
                'message' => 'something went wrong',
            ]);
        }
    }

    public function verify(User $user, $token) {
        try {
            $user->verifyEmail($token);
            return redirect()->route('index')->with('message', 'メールアドレスの登録確認が終わりました。');
        } catch (\Exception $e) {
            report($e);
            return redirect()->route('index')->with('message', $e->getMessage());
        }
    }
}