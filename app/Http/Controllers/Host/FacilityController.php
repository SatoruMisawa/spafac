<?php

namespace App\Http\Controllers\Host;

use App\Address;
use App\FacilityKind;
use App\Prefecture;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
	public function new() {
		return view('host.facility.new', [
			'prefectures' => Prefecture::all()->map(function($prefecture) {
				return $prefecture->name;
			})->toArray(),
			'facilityKinds' => FacilityKind::all(),
		]);
	}

	public function create(Request $request) {
		$request->validate([
			'name' => 'required',
			'zip' => 'required|zip',
			'prefecture_id' => 'required',
			'address1' => 'required',
			'address1_ruby' => 'required',
			'address2' => 'required',
			'address2_ruby' => 'required',
			'address3_ruby' => 'required_with:address3',
			'latitude' => 'required',
			'longitude' => 'required',
			'access' => 'required',
			'tel' => 'required|tel',
		]);
		
		$address = Address::firstOrCreate([
			'prefecture_id' => $request->get('prefecture_id') + 1,
			'zip' => $request->get('zip'),
			'address1' => $request->get('address1'),
			'address1_ruby' => $request->get('address1_ruby'),
			'address2' => $request->get('address2'),
			'address2_ruby' => $request->get('address2_ruby'),
			'address3' => $request->get('address3'),
			'address3_ruby' => $request->get('address3_ruby'),
			'latitude' => $request->get('latitude'),
			'longitude' => $request->get('longitude'),
		]);
		
		$address->facilities()->create([
			'facility_kind_id' => $request->get('facility_kind_id'),
			'name' => $request->get('name'),
			'access' => $request->get('access'),
			'tel' => $request->get('tel'),
		]);

		return redirect('/host');
	}
}
