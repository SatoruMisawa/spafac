<?php

namespace App\Http\Controllers\Host;

use App\Address;
use App\Facility;
use App\FacilityKind;
use App\Prefecture;
use App\Repositories\AddressRepository;
use App\Repositories\FacilityRepository;
use App\Repositories\FacilityKindRepository;
use App\Repositories\PrefectureRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateFacilityRequest as Request;
use Auth;

class FacilityController extends Controller
{
	private $addressRepository;

	private $facilityRepository;

	public function __construct(
		AddressRepository $addressRepository,
		FacilityRepository $facilityRepository,
		FacilityKindRepository $facilityKindRepository,
		PrefectureRepository $prefectureRepository
	) {
		$this->addressRepository = $addressRepository;
		$this->facilityRepository = $facilityRepository;
		$this->facilityKindRepository = $facilityKindRepository;
		$this->prefectureRepository = $prefectureRepository;
	}

	public function index() {
		return view('host.facility.index', [
			'facilities' => Auth::user()->facilities()->get(),
		]);
	}

	public function new() {
		return view('host.facility.new', [
			'prefectures' => $this->prefectureRepository->allIDsAndNames()->toArray(),
			'facilityKinds' => $this->facilityKindRepository->all(),
		]);
	}

	public function create(Request $request) {
		$address = $this->addressRepository->firstOrCreate($request->onlyDataOfAddress());
		$facility = Auth::guard('users')->user()->facilities()->create($request->onlyDataOfFacility()+[
			'address_id' => $address->id,
		]);
		
		return redirect()->route('host.facility.space.new', $facility->id);
	}

	public function edit(Facility $facility) {
		return view('host.facility.edit', [
			'facility' => $facility,
			'prefectures' => $this->prefectureRepository->allIDsAndNames()->toArray(),
			'facilityKinds' => $this->facilityKindRepository->all(),
		]);
	}

	public function update(Request $request, Facility $facility) {
		$address = $this->addressRepository->firstOrCreate($request->onlyDataOfAddress());
		$facility->update($request->onlyDataOfFacility()+[
			'address_id' => $address->id
		]);

		return redirect()->route('host.facility.index');
	}
}