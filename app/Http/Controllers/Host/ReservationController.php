<?php

namespace App\Http\Controllers\Host;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ReservationController extends Controller
{
    public function index() {
        return view('host.reservation.index', [
            'reservations' => Auth::guard('users')->user()->asHost()->reservations()->get(),
        ]);
    }
}