<?php

use App\Models\Project;
use App\Models\Team;
use App\Models\User;
use App\Livewire\CreateProject;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use function Pest\Laravel\assertDatabaseHas;

uses(RefreshDatabase::class);

it('can save a project', function () {
    $attributes = [
        'title' => fake()->sentence,
        'description' => fake()->paragraph,
    ];

    $user = User::factory()->create();

    Livewire::actingAs($user)
        ->test(CreateProject::class)
        ->set('title', $attributes['title'])
        ->call('save')
        ->assertOk();

    assertDatabaseHas('projects', $attributes);
})->todo();

it('can only be viewed by team members that are apart of the project', function () {
    // Create a team with a team leader
    $teamLeader = User::factory()->create();
    $team = Team::factory()->create(['user_id' => $teamLeader->id]);

    // Add team members
    $teamMember = User::factory()->create();
    $team->users()->attach($teamMember);

    // Create a project assigned to the team
    $project = Project::factory()->create(['team_id' => $team->id]);

    // Create another user who is not part of the team
    $unauthorizedUser = User::factory()->create();

    // Check if the unauthorized user can view the project
    Livewire::actingAs($unauthorizedUser)
        ->test(ViewProject::class, ['project' => $project])
        ->assertForbidden();

    // Check if a team member can view the project
    Livewire::actingAs($teamMember)
        ->test(ViewProject::class, ['project' => $project])
        ->assertSee($project->title)
        ->assertOk();

    // Check if the team leader can view the project
    Livewire::actingAs($teamLeader)
        ->test(ViewProject::class, ['project' => $project])
        ->assertSee($project->title)
        ->assertOk();
})->todo();
