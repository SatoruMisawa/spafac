<?php

namespace Tests\Feature;

use App\Space;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MessageTemplateControllerTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    public function testNew() {
        $space = factory(Space::class)->create();
        $response = $this->loginWithTesterIfDebug()
                        ->loginWithUser()
                        ->get(route('host.space.messagetemplate.new', $space->id));

        $response->assertStatus(200)
                 ->assertSee('新規定型文');
    }

    public function testCreate() {
        $space = factory(Space::class)->create();
        $data = $this->data();
        $this->assertPostRequestToCreateMessageTemplate($space->id, $data);
        $this->assertMessageTemplateInDB($space->id, $data);
    }

    private function data() {
        return [
            'on_apply_approved' => $this->faker->sentence(),
            'on_apply_rejected' => $this->faker->sentence(),
            'reminder' => $this->faker->sentence(),
        ];
    }

    private function assertPostRequestToCreateMessageTemplate($spaceID, $data) {
        return $this->loginWithTesterIfDebug()
                    ->loginWithUser()
                    ->post(route('host.space.messagetemplate.create', $spaceID), $data)
                    ->assertRedirect(route('host.index'));
    }

    private function assertMessageTemplateInDB($spaceID, $data) {
        $this->assertDatabaseHas('message_templates', [
            'space_id' => $spaceID,
            'on_apply_approved' => $data['on_apply_approved'],
            'on_apply_rejected' => $data['on_apply_rejected'],
            'reminder' => $data['reminder'],
        ]);
    }
}