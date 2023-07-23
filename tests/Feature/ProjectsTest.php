<?php

use App\Models\Project;
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

it('can access a project that they own', function () {
    $user = User::factory()->create();
    $user->projects()->save($project = Project::factory()->create());

    Livewire::actingAs($user)
        ->test(ViewProject::class)
        ->assertSee($project->title)
        ->assertOk();
})->todo();

it('can not access another project', function () {
    $user = User::factory()->create();
    $project = Project::factory()->create();

    Livewire::actingAs($user)
        ->test(ViewProject::class)
        ->assertSee($project->title)
        ->assertOk();
})->todo();
