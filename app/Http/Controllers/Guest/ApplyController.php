<?php

namespace App\Http\Controllers\Guest;

use App\Apply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ApplyController extends Controller
{
    public function index() {
        $guest = Auth::user()->asGuest();
        return view('guest.apply.index', [
            'applies' => $guest->applies()->get(),
        ]);
    }

    public function show(Apply $apply) {
        return view('guest.apply.show', compact('apply'));
    }
}