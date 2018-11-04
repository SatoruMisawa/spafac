<?php

namespace App\Http\Controllers\Host;

use App\Facility;
use App\KeyDelivery;
use App\Space;
use App\SpaceUsage;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

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

	public function create(Request $request, Facility $facility) {
		$request->validate([
			'space_usage_ids' => 'required|array',
			'capacity' => 'required|numeric|min:1',
			'floor_area' => 'required|numeric|min:1',
			'key_delivery_id' => 'required',
		]);
		
		$user = Auth::user();
		$space = $user->spaces()->create([
			'facility_id' => $facility->id,
			'key_delivery_id' => $request->get('key_delivery_id'),
			'capacity' => $request->get('capacity'),
			'floor_area' => $request->get('floor_area'),
		]);
		
		foreach ($request->get('space_usge_ids') as $spaceUsageID) {
			$space->spaceUsages()->save(SpaceUsage::find($spaceUsageID));
		}

		return redirect()->route('host.facility.space.image.new', [$facility->id, $space->id]);
	}

	public function edit(Facility $facility, Space $space) {
		return view('host.space.edit', [
			'space' => $space,
			'spaceUsages' => SpaceUsage::all(),
			'keyDeliveries' => KeyDelivery::all(),
		]);
	}
}
