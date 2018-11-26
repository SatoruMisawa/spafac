<?php

namespace App\Http\Controllers\Guest;

use App\Repositories\PlanRepository;
use App\Http\Requests\CreateApplyRequest as Request;
use App\Http\Controllers\Controller;
use Auth;

class ApplyController extends Controller
{
    private $planRepository;

    public function __construct(PlanRepository $planRepository) {
        $this->planRepository = $planRepository;
    }

    public function index() {
        $guest = Auth::user()->asGuest();
        return view('guest.apply.index', [
            'applies' => $guest->applies()->get(),
        ]);
    }

    public function create(Request $request) {
        $guest = Auth::guard('users')->user()->asGuest();
        $plan = $this->planRepository->find($request->plan_id);
        if ($request->by_day) {
            $guest->applyDailyPlan($plan);
        } else {
            $guest->applyHourlyPlan($plan, $request->hours);
        }
        
        return redirect()->route('guest.apply.index');
    }

    private function createApplyToDailyPlan(Request $request) {
        $plan = $this->planRepository->find($request->plan_id);
        Auth::guard('users')->user()->asGuest()->applyDailyPlan($plan);
    }

    private function createApplyToHourlyPlan(Request $request) {
        
    }

    public function show(Apply $apply) {
        return view('guest.apply.show', compact('apply'));
    }
}