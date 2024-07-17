<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Project;
use App\Models\Release;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $projects = Project::factory(10)->create();

        $projects->each(function (Project $project) {
            $releases = Release::factory(rand(1, 5))->create(['project_id' => $project->id]);
            $releases->each(function (Release $release) {
                Feature::factory(rand(1, 10))->create(['release_id' => $release->id]);
            });
        });
    }
}
