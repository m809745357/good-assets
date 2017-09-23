<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BillingsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test*/
    public function an_authenticated_user_can_view_billing()
    {
        $user = factory('App\User')->create();
        $this->actingAs($user);

        $billing = factory('App\Models\Billing')->create(['user_id' => $user->id]);

        $response = $this->get('/billings');

        $response->assertSee($billing->invoice);
    }

    /** @test*/
    public function an_authenticated_user_can_update_billing()
    {
        $user = factory('App\User')->create();
        $this->actingAs($user);

        $billing = factory('App\Models\Billing')->create(['user_id' => $user->id]);

        $response = $this->patch($billing->path(), [
            'invoice' => 'test'
        ]);

        $this->assertDatabaseHas('billings', ['user_id' => $user->id, 'invoice' => 'test']);
    }
}
