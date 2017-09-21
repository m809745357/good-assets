<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PropertiesTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_view_any_properties()
    {
        $properties = factory('App\Models\Property')->create();

        $this->get('/properties')
            ->assertSee($properties->title);
    }

    public function a_user_can_view_a_property()
    {
        $property = factory('App\Models\Property')->create();

        $this->get($property->path())
            ->assertSee($property->title);
    }
}
