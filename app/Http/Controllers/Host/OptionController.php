<?php

namespace App\Http\Controllers\Host;

use App\Plan;
use App\Space;
use App\Repositories\OptionRepository;
use App\Http\Requests\CreateOptionRequest;
use App\Http\Controllers\Controller;

class OptionController extends Controller
{
    private $optionRepository;

    public function __construct(OptionRepository $optionRepository) {
        $this->optionRepository = $optionRepository;
    }

    public function new(Space $space, Plan $plan) {
        try {
            return view('host.space.option.new', compact('space', 'plan'));
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
    }

    public function create(CreateOptionRequest $request, Space $space, Plan $plan) {
        try {
            $this->createOptions($request, $plan);
    
            return redirect()->route('host.space.messagetemplate.new', $space->id);
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
    }

    private function createOptions(CreateOptionRequest $request, Plan $plan) {
        foreach ($request->get('options') as $option) {
            if (!isset($option['name'])) {
                continue;
            }
            $this->optionRepository->create([
                'plan_id' => $plan->id,
                'name' => $option['name'],
                'description' => $option['description'],
                'price' => $option['price'],
            ]);
        }
    }
}