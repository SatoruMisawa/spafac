<?php

namespace Tests\Feature\Host;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RequirementControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testNew() {
        $this->loginWithTesterIfDebug()->loginWithUser();
        $this->get(route('host.requirement.new'))
        ->assertStatus(200);
    }
}