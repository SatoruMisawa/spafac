<?php

namespace Tests\Feature;

use App\Space;
use App\SpaceAttachment;
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
                        ->loginWithUser()
                        ->get(route('host.space.image.new', $space->id));
        $response->assertStatus(200)
                ->assertSee('新規スペース画像・動画');
    }

    public function testCreate() {
        $this->refreshAndSeedDatabase();
        $space = factory(Space::class)->create();
        $data = $this->data();
        $this->assertPostRequestToCreateSpaceImage($space->id, $data);
        $this->assertSpaceImageInDB($space->id, $data);
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

    private function assertPostRequestToCreateSpaceImage($spaceID, $data) {
        return $this->loginWithTesterIfDebug()
                    ->loginWithUser()
                    ->post(route('host.space.image.create', $spaceID), $data)
                    ->assertRedirect(route('host.space.plan.new', $spaceID));
    }

    private function assertSpaceImageInDB($spaceID, $data) {
        $this->assertImageInDB($spaceID, $data['images']);
        $this->assertVideoInDB($spaceID, $data['video_url']);
    }

    private function assertImageInDB($spaceID, $images) {
        foreach ($images as $image) {
            $this->assertDatabaseHas('space_attachments', [
                'space_id' => $spaceID,
                'url' => config('app.url').'/public/'.$image->hashName(),
                'type' => SpaceAttachment::TYPE_IMAGE,
            ]);
        }
    }

    private function assertVideoInDB($spaceID, $videoURL) {
        $this->assertDatabaseHas('space_attachments', [
            'space_id' => $spaceID,
            'url' => $videoURL,
            'type' => SpaceAttachment::TYPE_VIDEO,
        ]);
    }
}