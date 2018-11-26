<?php

namespace App\Http\Controllers\Host;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplyController extends Controller
{
    public function show() {
        return view('host.apply.show');
    }

    public function approved() {
        return redirect('/test/settlements');
    }
}