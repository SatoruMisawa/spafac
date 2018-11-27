<?php

namespace App\Http\Controllers\Host;

use App\Repositories\AddressRepository;
use App\Repositories\PrefectureRepository;
use App\Http\Requests\CreateRequirementOfHostRequest as Request;
use App\Http\Controllers\Controller;
use Auth;

class RequirementController extends Controller
{
    private $addressRepository;

    private $prefectureRepository;

    public function __construct(
        AddressRepository $addressRepository,
        PrefectureRepository $prefectureRepository
    ) {
        $this->addressRepository = $addressRepository;
        $this->prefectureRepository = $prefectureRepository;
    }

    public function new() {
        return view('host.requirement.new', [
            'prefectures' => $this->prefectureRepository->allIDsAndNames()->toArray()
        ]);
    }

    public function create(Request $request) {
        $address = $this->addressRepository->firstOrCreate($request->onlyDataOfAddress());
        Auth::guard('users')->user()->update(
            $request->onlyDataOfUser() + [
                'address_id' => $address->id,
            ]
        );

        return redirect()->route('host.index');
    }
}