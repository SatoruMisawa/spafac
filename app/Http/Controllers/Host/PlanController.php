<?php

namespace App\Http\Controllers\Host;

use App\Day;
use App\Facility;
use App\Plan;
use App\PreorderDeadline;
use App\PreorderPeriod;
use App\Space;
use App\Repositories\PreorderDeadlineRepository;
use App\Repositories\PreorderPeriodRepository;
use App\Repositories\ScheduleRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePlanRequest;


class PlanController extends Controller
{
	private $preorderDeadlineRepository;

	private $preorderPeriodRepository;

	private $scheduleRepository;

	public function __construct(
		PreorderDeadlineRepository $preorderDeadlineRepository,
		PreorderPeriodRepository $preorderPeriodRepository,
		ScheduleRepository $scheduleRepository
	) {
		$this->preorderDeadlineRepository = $preorderDeadlineRepository;
		$this->preorderPeriodRepository = $preorderPeriodRepository;
		$this->scheduleRepository = $scheduleRepository;
	}

	public function index(Space $space) {
		return view('host.plan.index', [
			'space' => $space,
			'plans' => $space->plans()->get(),
		]);
	}

	public function new(Space $space) {
		try {
            return view('host.plan.new', [
				'space' => $space,
				'days' => Day::all(),
				'preorderDeadlines' => $this->preorderDeadlineRepository->allNames()->toArray(),
				'preorderPeriods' => $this->preorderPeriodRepository->allNames()->toArray(),
			]);
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
	}

	public function create(CreatePlanRequest $request, Space $space) {
		try {
			$plan = $this->createPlan($request, $space);
			$this->fillSchedules($request, $plan);

			return redirect()->route('host.space.plan.option.new', [$space->id, $plan->id]);
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
	}

	private function createPlan(CreatePlanRequest $request, Space $space) {
		return $space->plans()->create(
			$request->only([
				'name',
				'preorder_deadline_id', 'preorder_period_id',
				'price_per_hour', 'price_per_day',
				'need_to_be_approved',
				'from', 'to',
			])
		);
	}

	private function fillSchedules(CreatePlanRequest $request, Plan $plan) {
		foreach ($request->get('day_ids') as $dayID) {
			$from = $request->get('hour_from')[$dayID];
			$to = $request->get('hour_to')[$dayID];

			$this->scheduleRepository->create([
				'plan_id' => $plan->id,
				'day_id' => $dayID,
				'from' => $from,
				'to' => $to,
			]);
		}
	}
}