<?php

namespace App\Http\Controllers\Host;

use App\Day;
use App\Plan;
use App\PreorderDeadline;
use App\PreorderPeriod;
use App\Schedule;
use App\Space;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


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

	public function create(Request $request, Space $space) {
		$request->validate([
			'name' => 'required',
			'price_per_hour' => 'nullable|required_with:by_hour|min:1',
			'price_per_day' => 'nullable|required_with:by_day|min:1',
			'day_ids' => 'required|array',
			'hour_from' => 'required|array',
			'hour_to' => 'required|array',
			'need_to_be_approved' => 'required|boolean',
			'preorder_deadline_id' => 'required',
			'preorder_period_id' => 'required',
			'period_from' => 'nullable|date',
			'period_to' => 'required_with:period_from|date|after:period_from',
		]);
		
		$plan = Plan::create([
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
						->withErrors('hour_from', '終了時刻より早い時間にしてください')
						->withInput();
			}

			Schedule::create([
				'plan_id' => $plan->id,
				'day_id' => $dayID,
				'from' => $from,
				'to' => $to,
			]);
		}

		$plan->space()->save($space);

		return redirect()->route('host.space.image.new', $space->id);
	}
}
