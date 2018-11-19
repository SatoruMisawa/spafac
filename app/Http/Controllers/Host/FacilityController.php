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
use App\Http\Requests\CreateFacilityRequest;
use Auth;
use Exception;

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
				'prefectures' => $this->prefectureRepository->allIDsAndNames()->toArray(),
				'facilityKinds' => $this->facilityKindRepository->all(),
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
            $address = $this->firstOrCreateAddress($request);
			$facility = $this->createFacility($request, $address);
		
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
				'prefectures' => $this->prefectureRepository->allIDsAndNames()->toArray(),
				'facilityKinds' => $this->facilityKindRepository->all(),
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
            $address = $this->firstOrCreateAddress($request);
			$this->updateFacility($request, $facility, $address);

			return redirect()->route('host.facility.index');
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
	}

	private function firstOrCreateAddress(CreateFacilityRequest $request) {
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

	private function createFacility(CreateFacilityRequest $request, Address $address) {
		$data = $this->data($request, $address->id);
		return Auth::user()->facilities()->create($data);
	}

	private function updateFacility(CreateFacilityRequest $request, Facility $facility, Address $address) {
		$data = $this->data($request, $address->id);
		return $this->facilityRepository->update($data, $facility->id);
	}

	private function data(CreateFacilityRequest $request, $addressID) {
		return $request->only([
			'facility_kind_id', 'name', 'access', 'tel',
		]) + ['address_id' => $addressID];
	}
}