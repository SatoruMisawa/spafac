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
            $this->createMessageTemplate($request, $space);

            return redirect()->route('host.index');
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
    }

    private function createMessageTemplate(CreateMessageTemplateRequest $request, Space $space) {
        $data = $this->data($request, $space->id);
        return $this->messageTemplateRepository->create($data);
    }

    private function data(CreateMessageTemplateRequest $request, $spaceID) {
        return $request->only([
            'on_apply_approved',
            'on_apply_rejected',
            'reminder',
        ]) + ['space_id' => $spaceID];
    }
}