<?php

namespace App\Http\Controllers\Host;

use App\Facility;
use App\Space;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Storage;

class ImageController extends Controller
{
    public function new(Facility $facility, Space $space) {
        return view('host.space.image.new', [
            'facility' => $facility,
            'space' => $space,
        ]);
    }

    public function create(Request $request, Facility $facility, Space $space) {
        $request->validate([
            'images' => 'required|array',
            'images.*' => 'file|image|mimes:jpeg,jpg,png',
        ]);
        
        foreach ($request->file('images') as $image) {
            $filename = $image->store('storage/app');
            $space->images()->create([
                'url' => $filename
            ]);
        }

        return redirect()->route('host.facility.space.plan.new', [$facility->id, $space->id]);
    }
}
