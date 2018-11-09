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
		$address = $this->addressRepository->firstOrCreate(
			$request->only([
				'zip', 'prefecture_id',
				'address1', 'address1_ruby',
				'address2', 'address2_ruby',
				'address3', 'address3_ruby',
				'latitude', 'longitude',
			])
		);

		$data = ['address_id' => $address->id] + $request->only([
			'facility_kind_id', 'name', 'access', 'tel',
		]);
		$facility = Auth::user()->facilities()->save(
			$this->facilityRepository->new($data)
		);
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
		$address = $this->addressRepository->firstOrCreate(
			$request->only([
				'zip', 'prefecture_id',
				'address1', 'address1_ruby',
				'address2', 'address2_ruby',
				'address3', 'address3_ruby',
				'latitude', 'longitude',
			])
		);

		$data = ['address_id' => $address->id] + $request->only([
			'facility_kind_id', 'name', 'access', 'tel',
		]);
		$this->facilityRepository->update($facility->id, $data);
		return redirect()->route('host.facility.index');
	}
}