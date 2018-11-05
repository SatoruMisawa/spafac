<?php

namespace App\Http\Controllers;

use App\Tester;
use Auth;
use Hash;
use Illuminate\Http\Request;

class TesterSessionController extends Controller
{
    public function new() {
        return view('tester.session.new');
    }
    
    public function create(Request $request) {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $tester = Tester::where('name', $request->name)->first();
        if ($tester === null) {
            return redirect()
                    ->back()
                    ->withErrors(['name' => 'name not found'])
                    ->withInput();
        }

        if (!Hash::check($request->get('password'), $tester->password)) {
            return redirect()
                    ->back()
                    ->withErrors(['name' => 'password not correct'])
                    ->withInput();
        }

        $tester->login();

        return redirect('/');
    }

    public function delete() {
        $tester = Tester::find(session('tester_id'));
        $tester->logout();
        return redirect()->route('tester.session.new');
    }
}
