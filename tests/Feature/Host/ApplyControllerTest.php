<?php

namespace Tests\Feature\Host;

use App\Apply;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApplyControllerTest extends TestCase
{
    use RefreshDatabase;
    
    public function testIndex() {
        $apply = factory(Apply::class)->create();
        $this->assertGetRequestToShowApplyIndex($apply);
    }

    private function assertGetRequestToShowApplyIndex(Apply $apply) {
        return $this->loginWithTesterIfDebug()
        ->loginWithUser($apply->host)
        ->get(route('host.apply.index'))
        ->assertStatus(200)
        ->assertSee('apply: '.$apply->id);
    }
}