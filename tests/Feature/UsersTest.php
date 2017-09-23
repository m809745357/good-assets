<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

class UsersTest extends TestCase
{
    use DatabaseMigrations;

    /** @test*/
    public function an_authenticated_user_can_update_profile()
    {
        $user = factory('App\User')->create();
        $this->actingAs($user);

        $this->patch($user->path(), [
            'name' => 'shenyifei',
            'mobile' => '18367831980',
            'gender' => 1,
        ]);

        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'name' => 'shenyifei',
            'mobile' => '18367831980',
            'gender' => 1,
        ]);
    }

    /** @test*/
    public function an_authenticated_user_can_reset_password()
    {
        $user = factory('App\User')->create(['password' => bcrypt('123')]);
        $this->actingAs($user);

        $password = 'password';

        $this->patch($user->path(), [
            'password_old' => '123',
            'password' => $password,
            'password_confirmation' => $password
        ]);
        $user = \App\User::find($user->id);

        $this->assertTrue(Hash::check($password, $user->password));
    }
}
