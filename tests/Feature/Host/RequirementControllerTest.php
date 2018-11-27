<?php

namespace Tests\Feature\Host;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RequirementControllerTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    public function testNew() {
        $this->loginWithTesterIfDebug()->loginWithUser();
        $this->get(route('host.requirement.new'))
        ->assertStatus(200);
    }

    public function testCreate() {
        $this->refreshAndSeedDatabase();
        $this->loginWithTesterIfDebug()->loginWithUser();
        $case = $this->caseOfCreatingRequirementOfHost();
        $this->assertPostRequestToCreateRequirementOfHost($case['data']);
        $this->assertAddressInDB($case['expectedAddress']);
        $this->assertUserInDB($case['expectedUser']);
    }

    public function caseOfCreatingRequirementOfHost() {
        $data = [
            'zip' => '0000000',
            'prefecture_id' => $this->faker->numberBetween(1, 47),
            'address1' => $this->faker->name(),
            'address1_ruby' => $this->faker->name(),
            'address2' => $this->faker->name(),
            'address2_ruby' => $this->faker->name(),
            'address3' => $this->faker->name(),
            'address3_ruby' => $this->faker->name(),
            'dob_day' => $this->faker->numberBetween(1, 27),
            'dob_month' => $this->faker->numberBetween(1, 12),
            'dob_year' => '1998',
            'family_name' => $this->faker->name(),
            'family_name_ruby' => $this->faker->name(),
            'given_name' => $this->faker->name(),
            'given_name_ruby' => $this->faker->name(),
            'gender' => 'male',
            'tel' => '00000000',
        ];
        return [
            'data' => $data,
            'expectedAddress' => [
                'zip' => $data['zip'],
                'prefecture_id' => $data['prefecture_id'],
                'address1' => $data['address1'],
                'address1_ruby' => $data['address1_ruby'],
                'address2' => $data['address2'],
                'address2_ruby' => $data['address2_ruby'],
                'address3' => $data['address3'],
                'address3_ruby' => $data['address3_ruby'],
            ],
            'expectedUser' => [
                'address_id' => 1,
                'dob_day' => $data['dob_day'],
                'dob_month' => $data['dob_month'],
                'dob_year' => $data['dob_year'],
                'family_name' => $data['family_name'],
                'family_name_ruby' => $data['family_name_ruby'],
                'given_name' => $data['given_name'],
                'given_name_ruby' => $data['given_name_ruby'],
                'gender' => $data['gender'],
                'tel' => $data['tel'],   
            ]
        ];
    }

    private function assertPostRequestToCreateRequirementOfHost($data) {
        return $this->post(route('host.requirement.create'), $data)
        ->assertRedirect(route('host.index'));
    }

    private function assertAddressInDB($data) {
        $this->assertDatabaseHas('addresses', $data);
    }

    private function assertUserInDB($data) {
        $this->assertDatabaseHas('users', $data);
    }
}