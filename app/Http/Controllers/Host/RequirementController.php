<?php

namespace App\Http\Controllers\Host;

use App\Repositories\PrefectureRepository;
use App\Http\Request\CreateRequirementOfHostRequest as Request;
use App\Http\Controllers\Controller;

class RequirementController extends Controller
{
    private $prefectureRepository;

    public function __construct(PrefectureRepository $prefectureRepository) {
        $this->prefectureRepository = $prefectureRepository;
    }

    public function new() {
        return view('host.requirement.new', [
            'prefectures' => $this->prefectureRepository->allIDsAndNames()->toArray()
        ]);
    }
}