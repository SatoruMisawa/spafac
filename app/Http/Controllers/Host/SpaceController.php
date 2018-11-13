<?php

namespace App\Http\Controllers\Host;

use App\Facility;
use App\KeyDelivery;
use App\Space;
use App\SpaceUsage;
use App\Repositories\SpaceRepository;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Requests\CreateSpaceRequest;

class SpaceController extends Controller
{
	private $spaceRepository;

	public function __construct(SpaceRepository $spaceRepository) {
		$this->spaceRepository = $spaceRepository;
	}

	public function index() {
		return view('host.space.index', [
			'spaces' => Auth::user()->spaces()->get(),
		]);
	}

	public function new(Facility $facility) {
		return view('host.space.new', [
			'facility' => $facility,
			'spaceUsages' => SpaceUsage::all(),
			'keyDeliveries' => KeyDelivery::all(),
		]);
	}

	public function create(CreateSpaceRequest $request, Facility $facility) {
		$data = ['facility_id' => $facility->id] + $request->only([
			'key_delivery_id', 'capacity', 'floor_area',
		]);
		$space = Auth::user()->spaces()->create($data);
		
		foreach ($request->get('space_usage_ids') as $spaceUsageID) {
			$space->spaceUsages()->save(SpaceUsage::find($spaceUsageID));
		}

		return redirect()->route('host.space.image.new', $space->id);
	}

	public function edit(Facility $facility, Space $space) {
		return view('host.space.edit', [
			'space' => $space,
			'spaceUsages' => SpaceUsage::all(),
			'keyDeliveries' => KeyDelivery::all(),
		]);
	}

	public function update(CreateSpaceRequest $request, Facility $facility, Space $space) {
		$data = ['facility_id' => $facility->id] + $request->only([
			'key_delivery_id', 'capacity', 'floor_area',
		]);
		$space = $this->spaceRepository->update($data, $space->id);
			
		$space->spaceUsages()->detach();
		foreach ($request->get('space_usage_ids') as $spaceUsageID) {
			$space->spaceUsages()->save(SpaceUsage::find($spaceUsageID));
		}

		return redirect()->route('host.space.index');
	}
}