<?php

namespace App\Http\Controllers\Host;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HostController extends Controller
{
    public function index() {
		return view('host.index');
	}
}