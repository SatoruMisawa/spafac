<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ReservationController extends Controller
{
    public function index() {
        return view('guest.reservation.index', [
            'reservations' => Auth::guard('users')->user()->asGuest()->reservations()->get(),
        ]);
    }
}