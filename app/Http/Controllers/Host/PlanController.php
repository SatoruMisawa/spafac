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
use App\Repositories\ScheduleToStayRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePlanRequest;
use App\Http\Requests\CreatePlanToStayRequest;
use Carbon\Carbon;


class PlanController extends Controller
{
	private $preorderDeadlineRepository;

	private $preorderPeriodRepository;

	private $scheduleRepository;

	private $scheduleToStayRepository;

	public function __construct(
		PreorderDeadlineRepository $preorderDeadlineRepository,
		PreorderPeriodRepository $preorderPeriodRepository,
		ScheduleRepository $scheduleRepository,
		ScheduleToStayRepository $scheduleToStayRepository
	) {
		$this->preorderDeadlineRepository = $preorderDeadlineRepository;
		$this->preorderPeriodRepository = $preorderPeriodRepository;
		$this->scheduleRepository = $scheduleRepository;
		$this->scheduleToStayRepository = $scheduleToStayRepository;
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

	public function newToStay(Space $space) {
		return view('stay.host.plan.new', [
			'space' => $space,
			'days' => Day::all(),
			'preorderDeadlines' => $this->preorderDeadlineRepository->allNames()->toArray(),
			'preorderPeriods' => $this->preorderPeriodRepository->allNames()->toArray(),
		]);
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
		$data = $this->data($request);
		return $space->plans()->create($data);
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

	public function createToStay(CreatePlanToStayRequest $request, Space $space) {
		$plan = $this->createPlanToStay($request, $space);
		$this->fillSchedulesToStay($request, $plan->id);

		return redirect()->route('host.space.plan.option.new', [$space->id, $plan->id]);
	}

	private function createPlanToStay(CreatePlanToStayRequest $request, Space $space) {
		$data = $this->dataToCreatePlanToStay($request);
		return $space->plans()->create($data);
	}

	private function fillSchedulesToStay(CreatePlanToStayRequest $request, $planID) {
		foreach ($request->get('day_ids') as $dayID) {
			$this->scheduleToStayRepository->create([
				'plan_id' => $planID,
				'day_id' => $dayID,
				'checkin_from' => $request->get('checkin_from'),
				'checkin_to' => $request->get('checkin_to'),
				'checkout' => $request->get('checkout'),
			]);
		}
	}

	public function show(Space $space, Plan $plan) {
		return view('host.plan.show', [
			'space' => $space,
			'plan' => $plan,
			'days' => Day::all(),
			'preorderDeadlines' => $this->preorderDeadlineRepository->allNames()->toArray(),
			'preorderPeriods' => $this->preorderPeriodRepository->allNames()->toArray(),
		]);
	}

	public function update(CreatePlanRequest $request, Space $space, Plan $plan) {
		try {
			$this->updatePlan($request, $plan);
			$this->refillSchedules($request, $plan);

			return redirect()->route('host.space.plan.index', $space->id);
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
	}

	private function refillSchedules(CreatePlanRequest $request, Plan $plan) {
		$plan->schedules()->detach();
		$this->fillSchedules($request, $plan);
	}

	public function updatePlan(CreatePlanRequest $request, Plan $plan) {
		$data = $this->data($request);
		$plan->update($data);
		return $plan;
	}

	private function data(CreatePlanRequest $request) {
		return $request->only([
			'name',
			'preorder_deadline_id', 'preorder_period_id',
			'price_per_hour', 'price_per_day',
			'need_to_be_approved',
		]) + [
			'from' => Carbon::parse($request->get('period_from'))->format('Y-m-d'),
			'to' => Carbon::parse($request->get('period_to'))->format('Y-m-d'),
		];
	}

	private function dataToCreatePlanToStay(CreatePlanToStayRequest $request) {
		return $request->onlyToCreatePlanToStay();
	}
}