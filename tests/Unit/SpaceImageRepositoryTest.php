<?php

namespace Tests\Unit;

use App\SpaceImage;
use App\Repositories\SpaceImageRepository;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SpaceImageRepositoryTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    public function testNew() {
        $data = $this->data();
        $spaceImage = $this->repository()->new($data);
        $this->assert($data, $spaceImage);
    }

    private function assert(array $expect, $actual) {
        $this->assertInstanceOf(SpaceImage::class, $actual);
        if (isset($expect['id'])) {
            $this->assertEquals($expect['id'], $actual->id);
        }
        $this->assertEquals($expect['url'], $actual->url);
    }

    private function repository() {
        return app()->make(SpaceImageRepository::class);
    }

    private function data() {
        return [
            'url' => $this->faker->url(),
        ];
    }
}