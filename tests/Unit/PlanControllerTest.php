<?php

namespace Tests\Unit;

use App\Space;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PlanControllerTest extends TestCase
{
    public function  testNew() {
        $space = factory(Space::class)->create();
        $response = $this->loginWithTesterIfDebug()
                        ->loginWithUser()
                        ->get(route('host.space.plan.new', $space->id));
        $response->assertStatus(200)
                ->assertSee('新規プラン');
    }
}