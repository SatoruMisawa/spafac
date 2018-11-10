<?php

namespace Tests\Unit;

use App\Space;
use Tests\TestCase;
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
}