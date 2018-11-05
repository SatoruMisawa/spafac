<?php

namespace App\Http\Controllers\Tester;

use App\Tester;
use Auth;
use Hash;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/';

    public function new() {
        return view('tester.session.new');
    }
    
    public function create(Request $request) {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        if (!$this->guard()->attempt([
            'name' => $request->get('name'),
            'password' => $request->get('password'),
        ], true)) {
            return redirect()
                    ->back()
                    ->withInput();
        }

        return redirect($this->redirectTo);
    }

    public function delete(Request $request) {
        $this->guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();
 
        return redirect()->route('tester.session.new');
    }

    protected function guard() {
        return Auth::guard('testers');
    }
}
