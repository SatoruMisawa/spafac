<?php

namespace App\Http\Controllers\Host;

use App\Facility;
use App\Space;
use App\SpaceAttachment;
use App\Repositories\SpaceAttachmentRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSpaceImageRequest;
use Intervention\Image\Facades\Image;
use Storage;

class SpaceAttachmentController extends Controller
{
    private $spaceAttachmentRepository;

    public function __construct(SpaceAttachmentRepository $spaceAttachmentRepository) {
        $this->spaceAttachmentRepository = $spaceAttachmentRepository;
    }

    public function new(Space $space) {
        return view('host.space.image.new', [
            'space' => $space,
        ]);
    }

    public function create(CreateSpaceImageRequest $request, Space $space) {
        $this->createImages($request->file('images'), $space->id);
        $this->createVideo($request->get('video_url'), $space->id);

        return redirect()->route('host.space.plan.new', $space->id);
    }

    private function createImages($images, $spaceID) {
        foreach ($images as $image) {
            $filename = $image->store('public');
            $this->spaceAttachmentRepository->create([
                'space_id' => $spaceID,
                'url' => config('app.url').'/'.$filename,
                'type' => SpaceAttachment::TYPE_IMAGE,
            ]);
        }
    }

    private function createVideo($videoURL, $spaceID) {
        $this->spaceAttachmentRepository->create([
            'space_id' => $spaceID,
            'url' => $videoURL,
            'type' => SpaceAttachment::TYPE_VIDEO,
        ]);
    }
}