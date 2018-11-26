<?php

namespace App\Http\Controllers\Host;

use App\Apply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ApplyController extends Controller
{
    public function index() {
        return view('host.apply.index', [
            'applies' => Auth::guard('users')->user()->asHost()->applies()->get(),
        ]);
    }

    public function show(Apply $apply) {
        return view('host.apply.show', compact('apply'));
    }

    public function approved() {
        return redirect('/test/settlements');
    }
}