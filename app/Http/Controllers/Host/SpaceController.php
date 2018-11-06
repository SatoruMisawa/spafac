<?php

namespace App\Http\Controllers\Host;

use App\Facility;
use App\KeyDelivery;
use App\Space;
use App\SpaceUsage;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Requests\CreateSpaceRequest;

class SpaceController extends Controller
{
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
		$user = Auth::user();
		$space = $user->spaces()->create([
			'facility_id' => $facility->id,
			'key_delivery_id' => $request->get('key_delivery_id'),
			'capacity' => $request->get('capacity'),
			'floor_area' => $request->get('floor_area'),
		]);
		
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
		$space->update([
			'facility_id' => $facility->id,
			'key_delivery_id' => $request->get('key_delivery_id'),
			'capacity' => $request->get('capacity'),
			'floor_area' => $request->get('floor_area'),
		]);
			
		$space->spaceUsages()->detach();
		foreach ($request->get('space_usage_ids') as $spaceUsageID) {
			$space->spaceUsages()->save(SpaceUsage::find($spaceUsageID));
		}

		return redirect()->route('host.space.index');
	}
}