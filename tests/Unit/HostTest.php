<?php

namespace Tests\Unit;

use App\Apply;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HostTest extends TestCase
{
    use RefreshDatabase;

    public function testApprove() {
        $apply = factory(Apply::class)->create();
        $host = $apply->plan->planner()->asHost();
        $host->approve($apply);
        $this->assertDatabaseHas('reservations', [
            'host_id' => $host->id,
            'guest_id' => $apply->guest->id,
            'apply_id' => $apply->id,
        ]);
    }
}