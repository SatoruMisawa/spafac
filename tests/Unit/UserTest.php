<?php

namespace Tests\Unit;

use App\Apply;
use App\Plan;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    
    public function testApply() {
        $user = factory(User::class)->create();
        $plan = factory(Plan::class)->create();
        $user->apply($plan);
        $this->assertTrue($user->applies()->where('plan_id', $plan->id)->exists());
    }

    public function testApprove() {
        $apply = factory(Apply::class)->create();
        $apply->plan->planner()->approve($apply);
        $this->assertTrue($apply->user->reservations()->where('plan_id', $apply->plan_id)->exists());
    }
}