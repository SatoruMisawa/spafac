<?php

namespace App\Http\Controllers\Host;

use App\Space;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageTemplateController extends Controller
{
    public function new(Space $space) {
        try {
            return view('host.space.messagetemplate.new', compact('space'));
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}