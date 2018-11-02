<?php

namespace App\Http\Controllers\Host;

use App\KeyDelivery;
use App\Space;
use App\SpaceUsage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpaceController extends Controller
{
	public function new(Space $space) {
		return view('host.space.new', [
			'space' => $space,
			'spaceUsages' => SpaceUsage::all(),
			'keyDeliveries' => KeyDelivery::all(),
		]);
	}

	public function create(Request $request, Space $space) {
		$request->validate([
			'space_usage_ids' => 'required',
			'capacity' => 'required',
			'floor_area' => 'required',
			'key_delivery_id' => 'required',
		]);

		$space->fill($request->all())->save();

		return redirect()->route('host.plan.new', $space->id);
	}
}
