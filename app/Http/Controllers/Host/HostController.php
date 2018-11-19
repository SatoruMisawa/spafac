<?php

namespace App\Http\Controllers\Host;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class HostController extends Controller
{
    public function index() {
		try {
            return view('host.index');
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
	}
}