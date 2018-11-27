<?php

namespace App\Http\Controllers\Guest;

use App\Repositories\OptionRepository;
use App\Repositories\PlanRepository;
use App\Http\Requests\CreateApplyRequest as Request;
use App\Http\Controllers\Controller;
use Auth;

class ApplyController extends Controller
{
    private $optionRepository;

    private $planRepository;

    public function __construct(
        OptionRepository $optionRepository,
        PlanRepository $planRepository
    ) {
        $this->optionRepository = $optionRepository;
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
        $options = $this->optionRepository->find($request->option_ids);  
        if ($request->by_day) {
            $guest->applyDailyPlan($plan, $options, $request->option_counts);
        } else {
            $guest->applyHourlyPlan($plan, $request->hours, $options, $request->option_counts);
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