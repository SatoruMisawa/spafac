<?php

namespace Tests\Unit;

use App\User;
use App\Plan;
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
}