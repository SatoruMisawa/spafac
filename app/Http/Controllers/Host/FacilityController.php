<?php

namespace App\Http\Controllers\Host;

use App\Address;
use App\Facility;
use App\FacilityKind;
use App\Prefecture;
use App\Repositories\AddressRepository;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Requests\CreateFacilityRequest;

class FacilityController extends Controller
{
	private $addressRepository;

	public function __construct(AddressRepository $addressRepository) {
		$this->addressRepository = $addressRepository;
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
		$facility = $user->facilities()->create([
			'address_id' => $address->id,
			'facility_kind_id' => $request->get('facility_kind_id'),
			'name' => $request->get('name'),
			'access' => $request->get('access'),
			'tel' => $request->get('tel'),
		]);
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

		$facility->update([
			'address_id' => $address->id,
			'facility_kind_id' => $request->get('facility_kind_id'),
			'name' => $request->get('name'),
			'access' => $request->get('access'),
			'tel' => $request->get('tel'),
		]);

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
}