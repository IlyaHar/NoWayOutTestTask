<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Release>
 */
class ReleaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'version' => $this->faker->randomFloat(2, 1.0, 10.0),
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'text' => $this->faker->text,
            'image' => $this->faker->imageUrl,
            'video' => $this->faker->url,
            'link' =>  $this->faker->url,
            'is_protected' => $this->faker->boolean,
            'project_id' => Project::factory(),
        ];
    }
}
