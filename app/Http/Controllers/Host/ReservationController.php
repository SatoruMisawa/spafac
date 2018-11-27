<?php

namespace App\Http\Controllers\Host;

use App\Repositories\ApplyRepository;
use App\Http\Requests\CreateReservationRequest as Request;
use App\Http\Controllers\Controller;
use Auth;

class ReservationController extends Controller
{
    private $applyRepository;

    public function __construct(ApplyRepository $applyRepository) {
        $this->applyRepository = $applyRepository;
    }

    public function index() {
        return view('host.reservation.index', [
            'reservations' => Auth::guard('users')->user()->asHost()->reservations()->get(),
        ]);
    }

    public function create(Request $request) {
        $apply = $this->applyRepository->find($request->apply_id);
        $host = Auth::guard('users')->user()->asHost();
        $reservation = $host->approve($apply);
        $host->chargeFor($reservation);

        return redirect()->route('host.reservation.index');
    }
}