<?php

namespace Tests\Feature;

use App\Space;
use App\User;
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
                        ->loginWithUser(User::find($space->user_id))
                        ->get(route('host.space.messagetemplate.new', $space->id));

        $response->assertStatus(200)
                 ->assertSee('定型文');
    }

    public function testCreate() {
        $space = factory(Space::class)->create();
        $data = $this->data();
        $this->assertPostRequestToCreateMessageTemplate($data, $space);
        $this->assertMessageTemplateInDB($data, $space->id);
    }

    private function data() {
        return [
            'on_apply_approved' => $this->faker->sentence(),
            'on_apply_rejected' => $this->faker->sentence(),
            'reminder' => $this->faker->sentence(),
        ];
    }

    private function assertPostRequestToCreateMessageTemplate($data, Space $space) {
        return $this->loginWithTesterIfDebug()
                    ->loginWithUser(User::find($space->user_id))
                    ->post(route('host.space.messagetemplate.create', $space->id), $data)
                    ->assertRedirect(route('host.index'));
    }

    private function assertMessageTemplateInDB($data, $spaceID) {
        $this->assertDatabaseHas('message_templates', [
            'space_id' => $spaceID,
            'on_apply_approved' => $data['on_apply_approved'],
            'on_apply_rejected' => $data['on_apply_rejected'],
            'reminder' => $data['reminder'],
        ]);
    }
}