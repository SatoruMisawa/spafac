<?php

namespace App\Http\Controllers\Host;

use App\Space;
use App\Repositories\MessageTemplateRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateMessageTemplateRequest;

class MessageTemplateController extends Controller
{
    private $messageTemplateRepository;

    public function __construct(MessageTemplateRepository $messageTemplateRepository) {
        $this->messageTemplateRepository = $messageTemplateRepository;
    }

    public function new(Space $space) {
        try {
            return view('host.space.messagetemplate.new', compact('space'));
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
    }

    public function create(CreateMessageTemplateRequest $request, Space $space) {
        try {
            $data = $this->data($request, $space->id);
            $this->messageTemplateRepository->create($data);

            return redirect()->route('host.space.plan.new', $space->id);
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
    }

    private function data(CreateMessageTemplateRequest $request, $spaceID) {
        return $request->only([
            'on_apply_approved',
            'on_apply_rejected',
            'reminder',
        ]) + ['space_id' => $spaceID];
    }
}