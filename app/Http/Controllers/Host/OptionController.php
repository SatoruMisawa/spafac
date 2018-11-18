<?php

namespace App\Http\Controllers\Host;

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

    public function new(Space $space) {
        try {
            return view('host.space.option.new', compact('space'));
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
    }

    public function create(CreateOptionRequest $request, Space $space) {
        try {
            foreach ($request->get('options') as $option) {
                if (!isset($option['name'])) {
                    continue;
                }
                $this->optionRepository->create([
                    'space_id' => $space->id,
                    'name' => $option['name'],
                    'price' => $option['price'],
                    'limit' => $option['limit'],
                ]);
            }
    
            return redirect()->route('host.space.messagetemplate.new', $space->id);
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
    }
}