<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Adding an admin user
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'email' => 'admin@admin.com',
                'password' => \Hash::make('admin'),
            ]);

        $this->call(BoardSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(SprintSeeder::class);
        $this->call(TaskSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(UserSeeder::class);
    }
}
