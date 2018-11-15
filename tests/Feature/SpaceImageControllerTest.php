<?php

namespace Tests\Feature;

use App\Space;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SpaceImageControllerTest extends TestCase
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
        foreach ($data['images'] as $image) {
            $this->assertDatabaseHas('space_images', [
                'space_id' => $spaceID,
                'url' => 'public/'.$image->hashName(),
            ]);
        }
    }
}