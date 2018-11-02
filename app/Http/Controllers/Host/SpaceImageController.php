<?php

namespace App\Http\Controllers\Host;

use App\Space;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Storage;

class SpaceImageController extends Controller
{
    public function new(Space $space) {
        return view('host.space.image.new', [
            'space' => $space,
        ]);
    }

    public function create(Request $request, Space $space) {
        $request->validate([
            'image' => 'required|file|image',
        ]);
        
        $filename = $request->file('image')->store('storage/app');

        return redirect()->route('host');
    }
}
