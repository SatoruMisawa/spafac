<?php

namespace App\Http\Controllers\Host;

use App\Address;
use App\Facility;
use App\FacilityKind;
use App\Prefecture;
use App\Repositories\AddressRepository;
use App\Repositories\FacilityRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateFacilityRequest;
use Auth;
use Exception;

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
		try {
            return view('host.facility.index', [
				'facilities' => Auth::user()->facilities()->get(),
			]);
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
	}

	public function new() {
		try {
            return view('host.facility.new', [
				'prefectures' => Prefecture::all()->mapWithKeys(function($prefecture) {
					return [$prefecture->id => $prefecture->name];
				})->toArray(),
				'facilityKinds' => FacilityKind::all(),
			]);
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
	}

	public function create(CreateFacilityRequest $request) {
		try {
            $address = $this->firstOrCreateAddressFrom($request);

			$data = $this->data($request, $address->id);
			$facility = Auth::user()->facilities()->create($data);
		
			return redirect()->route('host.facility.space.new', $facility->id);
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
	}

	public function edit(Facility $facility) {
		try {
            return view('host.facility.edit', [
				'facility' => $facility,
				'prefectures' => Prefecture::all()->mapWithKeys(function($prefecture) {
					return [$prefecture->id => $prefecture->name];
				})->toArray(),
				'facilityKinds' => FacilityKind::all(),
			]);
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
	}

	public function update(CreateFacilityRequest $request, Facility $facility) {
		try {
            $address = $this->firstOrCreateAddressFrom($request);

			$data = $this->data($request, $address->id);
			$this->facilityRepository->update($data, $facility->id);
		
			return redirect()->route('host.facility.index');
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
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

	private function data(CreateFacilityRequest $request, $addressID) {
		return $request->only([
			'facility_kind_id', 'name', 'access', 'tel',
		]) + ['address_id' => $addressID];
	}
}