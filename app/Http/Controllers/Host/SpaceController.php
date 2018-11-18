<?php

namespace App\Http\Controllers\Host;

use App\Amenity;
use App\Facility;
use App\KeyDelivery;
use App\Space;
use App\SpaceUsage;
use App\Repositories\AmenityRepository;
use App\Repositories\KeyDeliveryRepository;
use App\Repositories\SpaceRepository;
use App\Repositories\SpaceUsageRepository;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Requests\CreateSpaceRequest;

class SpaceController extends Controller
{
	private $amenityRepository;

	private $keyDeliveryRepository;

	private $spaceRepository;

	private $spaceUsageRepository;

	public function __construct(
		AmenityRepository $amenityRepository,
		KeyDeliveryRepository $keyDeliveryRepository,
		SpaceRepository $spaceRepository,
		SpaceUsageRepository $spaceUsageRepository
	) {
		$this->amenityRepository = $amenityRepository;
		$this->keyDeliveryRepository = $keyDeliveryRepository;
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

	public function create(CreateSpaceRequest $request, Facility $facility) {
		try {
			$space = $this->createSpace($request, $facility);

			$this->createAmenities($request, $space);
			$this->createSpaceUsages($request, $space);

			return redirect()->route('host.space.image.new', $space->id);
        } catch (Exception $e) {
            report($e);
            return redirect()->back()->withErrors([
                'message' => 'something went wrong',
            ]);
        }
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
}