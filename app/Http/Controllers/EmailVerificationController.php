<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class EmailVerificationController extends Controller
{
    public function verify(User $user, $token) {
        try {
            $user->verifyEmail($token);
            return redirect('/')->with('message', 'メールアドレスの登録確認が終わりました。');
        } catch (\Exception $e) {
            return redirect('/')->with('message', $e->getMessage());
        }
    }
}
