<?php

namespace App\Http\Controllers\Host;

use App\Facility;
use App\Space;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSpaceImageRequest;
use Intervention\Image\Facades\Image;
use Storage;

class ImageController extends Controller
{
    public function new(Space $space) {
        return view('host.space.image.new', [
            'space' => $space,
        ]);
    }

    public function create(CreateSpaceImageRequest $request, Space $space) {
        foreach ($request->file('images') as $image) {
            $filename = $image->store('public');
            $space->images()->create([
                'url' => $filename
            ]);
        }

        return redirect()->route('host.space.plan.new', $space->id);
    }
}