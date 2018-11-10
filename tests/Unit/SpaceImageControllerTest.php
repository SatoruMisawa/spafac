<?php

namespace Tests\Unit;

use App\Space;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SpaceImageControllerTest extends TestCase
{
    public function testNew() {
        $this->refreshAndSeedDatabase();
        $space = factory(Space::class)->create();
        $response = $this->loginWithTesterIfDebug()
                        ->loginWithUser()
                        ->get(route('host.space.image.new', $space->id));
        $response->assertStatus(200)
                ->assertSee('新規スペース画像');
    }

    public function testCreate() {
        $this->refreshAndSeedDatabase();
        $space = factory(Space::class)->create();
        $response = $this->loginWithTesterIfDebug()
                        ->loginWithUser()
                        ->post(route('host.space.image.create', $space->id), [
                            'images' => [
                                UploadedFile::fake()->image('test.png'),
                            ],
                        ])
                        ->assertRedirect(route('host.space.plan.new', $space->id));
    }
}