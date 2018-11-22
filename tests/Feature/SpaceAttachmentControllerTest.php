<?php

namespace Tests\Feature;

use App\Space;
use App\SpaceAttachment;
use App\User;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SpaceAttachmentControllerTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    public function testNew() {
        $this->refreshAndSeedDatabase();
        $space = factory(Space::class)->create();
        $response = $this->loginWithTesterIfDebug()
                        ->loginWithUser(User::find($space->user_id))
                        ->get(route('host.space.attachment.new', $space->id));
        $response->assertStatus(200)
                ->assertSee('スペース写真・動画');
    }

    public function testCreate() {
        $this->refreshAndSeedDatabase();
        $space = factory(Space::class)->create();
        $data = $this->data();
        $this->assertPostRequestToCreateSpaceImage($data, $space);
        $this->assertSpaceImageInDB($data, $space->id);
    }

    private function data() {
        return [
            'images' => [
                UploadedFile::fake()->image('test.png'),
                UploadedFile::fake()->image('test.jpeg'),
                UploadedFile::fake()->image('test.jpg'),
                UploadedFile::fake()->image('test.pdf'),
            ],
            'video_url' => $this->faker->url(),
        ];
    }

    private function assertPostRequestToCreateSpaceImage($data, Space $space) {
        return $this->loginWithTesterIfDebug()
                    ->loginWithUser(User::find($space->user_id))
                    ->post(route('host.space.attachment.create', $space->id), $data)
                    ->assertRedirect(route('host.space.plan.new', $space->id));
    }

    private function assertSpaceImageInDB($data, $spaceID) {
        $this->assertImageInDB($data['images'], $spaceID);
        $this->assertVideoInDB($data['video_url'], $spaceID);
    }

    private function assertImageInDB($images, $spaceID) {
        foreach ($images as $image) {
            $this->assertDatabaseHas('space_attachments', [
                'space_id' => $spaceID,
                'url' => config('app.url').'/storage/'.$image->hashName(),
                'type' => SpaceAttachment::TYPE_IMAGE,
            ]);
        }
    }

    private function assertVideoInDB($videoURL, $spaceID) {
        if ($videoURL === null) {
            return;
        }
        $this->assertDatabaseHas('space_attachments', [
            'space_id' => $spaceID,
            'url' => $videoURL,
            'type' => SpaceAttachment::TYPE_VIDEO,
        ]);
    }
}