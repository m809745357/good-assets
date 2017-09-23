<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class FavoritesTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function guests_can_not_favorite_anything()
    {
        $this->withExceptionHandling()
            ->post('/projects/1/favorites')
            ->assertRedirect('/login');
    }

    /** @test */
    public function an_authenticated_user_can_favorite_any_project()
    {
        $user = factory('App\User')->create();
        $this->actingAs($user);

        $project = factory('App\Models\Project')->create();

        $this->post('/projects/' . $project->id . '/favorites');

        $this->assertCount(1, $project->favorites);

        $this->assertDatabaseHas('favorites', ['user_id' => $user->id, 'favorited_id' => $project->id]);
    }

    /** @test */
    public function an_authenticated_user_may_only_favorite_a_project_once()
    {
        $user = factory('App\User')->create();
        $this->actingAs($user);

        $project = factory('App\Models\Project')->create();

        $this->post('/projects/' . $project->id . '/favorites');

        $this->post('/projects/' . $project->id . '/favorites');

        $this->assertCount(1, $project->favorites);

        $this->assertDatabaseHas('favorites', ['user_id' => $user->id, 'favorited_id' => $project->id]);
    }

    /** @test */
    public function an_authenticated_user_can_delete_favorite_project()
    {
        $user = factory('App\User')->create();
        $this->actingAs($user);

        $project = factory('App\Models\Project')->create();

        $favorite = $project->favorites()->create(['user_id' => $user->id]);

        $this->delete('/projects/' . $project->id . '/favorites');

        $this->assertDatabaseMissing('favorites', ['id' => $favorite->id]);
    }

    /** @test */
    public function an_authenticated_user_can_view_all_favorite()
    {
        $user = factory('App\User')->create();
        $this->actingAs($user);

        $project = factory('App\Models\Project')->create();

        $favorite = $project->favorites()->create(['user_id' => $user->id]);

        $response = $this->get('/favorites');

        $response->assertSee($favorite->favorited->title);
    }
}
