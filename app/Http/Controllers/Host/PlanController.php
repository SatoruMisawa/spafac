<?php

namespace App\Http\Controllers\Host;

use App\Day;
use App\Facility;
use App\Plan;
use App\PreorderDeadline;
use App\PreorderPeriod;
use App\Schedule;
use App\Space;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePlanRequest;


class PlanController extends Controller
{
	public function new(Space $space) {
		return view('host.plan.new', [
			'space' => $space,
			'days' => Day::all(),
			'preorderDeadlines' => PreorderDeadline::all()->map(function($deadline) {
				return $deadline->name;
			})->toArray(),
			'preorderPeriods' => PreorderPeriod::all()->map(function($period) {
				return $period->name;
			})->toArray(),
		]);
	}

	public function create(CreatePlanRequest $request, Space $space) {
		$plan = $space->plan()->create([
			'name' => $request->get('name'),
			'preorder_deadline_id' => $request->get('preorder_deadline_id'),
			'preorder_period_id' => $request->get('preorder_period_id'),
			'price_per_hour' => $request->get('price_per_hour'),
			'price_per_day' => $request->get('price_per_day'),
			'need_to_be_approved' => $request->get('need_to_be_approved'),
			'from' => $request->get('period_from'),
			'to' => $request->get('period_to'),
		]);
		
		foreach ($request->get('day_ids') as $dayID) {
			$from = $request->get('hour_from')[$dayID];
			$to = $request->get('hour_to')[$dayID];
			if ($to <= $from) {
				return redirect()
						->back()
						->withErrors(['hour_from['.$dayID.']' => '終了時刻より開始時間を前の時間にしてください'])
						->withInput();
			}

			Schedule::create([
				'plan_id' => $plan->id,
				'day_id' => $dayID,
				'from' => $from,
				'to' => $to,
			]);
		}

		return redirect()->route('host');
	}
}