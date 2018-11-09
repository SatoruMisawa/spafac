<?php

namespace App\Http\Controllers\Host;

use App\Address;
use App\Facility;
use App\FacilityKind;
use App\Prefecture;
use App\Repositories\AddressRepository;
use App\Repositories\FacilityRepository;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Requests\CreateFacilityRequest;

class FacilityController extends Controller
{
	private $addressRepository;

	private $facilityRepository;

	public function __construct(
		AddressRepository $addressRepository,
		FacilityRepository $facilityRepository
	) {
		$this->addressRepository = $addressRepository;
		$this->facilityRepository = $facilityRepository;
	}

	public function index() {
		return view('host.facility.index', [
			'facilities' => Auth::user()->facilities()->get(),
		]);
	}

	public function new() {
		return view('host.facility.new', [
			'prefectures' => Prefecture::all()->mapWithKeys(function($prefecture) {
				return [$prefecture->id => $prefecture->name];
			})->toArray(),
			'facilityKinds' => FacilityKind::all(),
		]);
	}

	public function create(CreateFacilityRequest $request) {
		$address = $this->firstOrCreateAddressFrom($request);
		$user = Auth::user();
		$facility = $user->facilities()->save($this->newFacilityFrom($request, $address->id));
		return redirect()->route('host.facility.space.new', $facility->id);
	}

	public function edit(Facility $facility) {
		return view('host.facility.edit', [
			'facility' => $facility,
			'prefectures' => Prefecture::all()->mapWithKeys(function($prefecture) {
				return [$prefecture->id => $prefecture->name];
			})->toArray(),
			'facilityKinds' => FacilityKind::all(),
		]);
	}

	public function update(CreateFacilityRequest $request, Facility $facility) {
		$address = $this->firstOrCreateAddressFrom($request);
		$this->updateFacilityFrom($facility->id, $request, $address->id);
		return redirect()->route('host.facility.index');
	}

	private function firstOrCreateAddressFrom(CreateFacilityRequest $request) {
		return $this->addressRepository->firstOrCreate(
			$request->only([
				'zip', 'prefecture_id',
				'address1', 'address1_ruby',
				'address2', 'address2_ruby',
				'address3', 'address3_ruby',
				'latitude', 'longitude',
			])
		);
	}

	private function newFacilityFrom(CreateFacilityRequest $request, $addressID) {
		$data = ['address_id' => $addressID] + $request->only([
			'facility_kind_id', 'name', 'access', 'tel',
		]);
		return $this->facilityRepository->new($data);
	}

	private function updateFacilityFrom($facilityID, CreateFacilityRequest $request, $addressID) {
		$data = ['address_id' => $addressID] + $request->only([
			'facility_kind_id', 'name', 'access', 'tel',
		]);
		return $this->facilityRepository->update($facilityID, $data);
	}
}