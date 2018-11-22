<?php

namespace App\Http\Controllers\Host;

use App\Amenity;
use App\Facility;
use App\KeyDelivery;
use App\Space;
use App\SpaceUsage;
use App\Repositories\AmenityRepository;
use App\Repositories\KeyDeliveryRepository;
use App\Repositories\RentSpaceTypeRepository;
use App\Repositories\RentSpaceBusinessTypeRepository;
use App\Repositories\SpaceRepository;
use App\Repositories\SpaceUsageRepository;
use App\Http\Requests\CreateSpaceRequest;
use App\Http\Requests\CreateSpaceToStayRequest;
use App\Http\Controllers\Controller;
use Auth;

class SpaceController extends Controller
{
	private $amenityRepository;

	private $keyDeliveryRepository;

	private $rentSpaceTypeRepository;

	private $rentSpaceBusinessTypeRepository;

	private $spaceRepository;

	private $spaceUsageRepository;

	public function __construct(
		AmenityRepository $amenityRepository,
		KeyDeliveryRepository $keyDeliveryRepository,
		RentSpaceTypeRepository $rentSpaceTypeRepository,
		RentSpaceBusinessTypeRepository $rentSpaceBusinessTypeRepository,
		SpaceRepository $spaceRepository,
		SpaceUsageRepository $spaceUsageRepository
	) {
		$this->amenityRepository = $amenityRepository;
		$this->keyDeliveryRepository = $keyDeliveryRepository;
		$this->rentSpaceTypeRepository = $rentSpaceTypeRepository;
		$this->rentSpaceBusinessTypeRepository = $rentSpaceBusinessTypeRepository;
		$this->spaceRepository = $spaceRepository;
		$this->spaceUsageRepository = $spaceUsageRepository;
	}

	public function index() {
		return view('host.space.index', [
			'spaces' => Auth::user()->spaces()->get(),
		]);
	}

	public function new(Facility $facility) {
		try {
            return view('host.space.new', [
				'facility' => $facility,
				'spaceUsages' => $this->spaceUsageRepository->all(),
				'amenities' => $this->amenityRepository->all(),
				'keyDeliveries' => $this->keyDeliveryRepository->all(),
			]);
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
	}

	public function newToStay(Facility $facility) {
		return view('host.space.new', [
			'facility' => $facility,
			'spaceUsages' => $this->spaceUsageRepository->all(),
			'amenities' => $this->amenityRepository->all(),
			'keyDeliveries' => $this->keyDeliveryRepository->all(),
			'rentSpaceTypes' => $this->rentSpaceTypeRepository->all(),
			'rentSpaceBusinessTypes' => $this->rentSpaceBusinessTypeRepository->allIDsAndNames(),
		]);
	}

	public function create(CreateSpaceRequest $request, Facility $facility) {
		try {
			$space = $this->createSpace($request, $facility);

			$this->createAmenities($request, $space);
			$this->createSpaceUsages($request, $space);

			return redirect()->route('host.space.attachment.new', $space->id);
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
	}

	public function createToStay(CreateSpaceToStayReqeust $request, Facility $facility) {
		$space = $this->createSpaceToStay($request, $facility->id);
		
		$this->createAmenities($request, $space);
		$this->createSpaceUsages($request, $space);

		return redirect()->route('host.space.attachment.new', $space->id);
	}

	private function createSpaceToStay(CreateSpaceToStayRequest $request, $facilityID) {
		$imageName = ImageStorage::storePrivately($request->get('business_license_image'));
		$data = $this->dataToCreateSpaceToStay($request, $facilityID, $imageName);
		return Auth::user()->spaces()->create($data);
	} 

	public function edit(Facility $facility, Space $space) {
		try {
            return view('host.space.edit', [
				'space' => $space,
				'spaceUsages' => $this->spaceUsageRepository->all(),
				'keyDeliveries' => $this->keyDeliveryRepository->all(),
			]);
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
	}

	public function update(CreateSpaceRequest $request, Facility $facility, Space $space) {
		try {
			$space = $this->updateSpace($request, $facility, $space);
				
			$this->recreateAmenities($request, $space);
			$this->recreateSpaceUsages($request, $space);

			return redirect()->route('host.space.index');
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
	}

	private function createSpace(CreateSpaceRequest $request, Facility $facility) {
		$data = $this->data($request, $facility->id);
		return $space = Auth::user()->spaces()->create($data);
	}

	private function updateSpace(CreateSpaceRequest $request, Facility $facility, Space $space) {
		$data = $this->data($request, $facility->id);
		return $space = $this->spaceRepository->update($data, $space->id);
	}

	private function recreateAmenities(CreateSpaceRequest $request, Space $space) {
		$space->amenities()->detach();
		$this->createAmenities($request, $space);
	}

	private function createAmenities(CreateSpaceRequest $request, Space $space) {
		foreach ($request->get('amenity_ids') as $amenityID) {
			$space->amenities()->save(Amenity::find($amenityID));
		}
	}

	private function recreateSpaceUsages(CreateSpaceRequest $request, Space $space) {
		$space->spaceUsages()->detach();
		$this->createSpaceUsages($request, $space);
	}

	private function createSpaceUsages(CreateSpaceRequest $request, Space $space) {
		foreach ($request->get('space_usage_ids') as $spaceUsageID) {
			$space->spaceUsages()->save(SpaceUsage::find($spaceUsageID));
		}
	}

	private function data(CreateSpaceRequest $request, $facilityID) {
		return $request->only([
			'key_delivery_id',
			'name', 'about', 'capacity', 'floor_area',
			'about_amenity', 'about_food_drink','about_cleanup',
			'cancellation_policy', 'terms_of_use',
		]) + ['facility_id' => $facilityID];
	}

	private function dataToCreateSpaceToStay(CreateSpaceToStayRequest $request, $facilityID, $businessLisenceImageName) {
		return $reqeust->onlyToCreateSpaceToStay() + [
			'facility_id' => $facilityID,
			'business_lisence_image_name' => $businessLisenceImageName,
		];
	}
}