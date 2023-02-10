<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'name' => fake() -> unique() -> sentence(2),
            'description' => fake() -> boolean() ? fake() -> text(100) : null,
            'release_date' => fake() -> date(),
            'repo_link' => fake() -> unique() -> url() ,

        ];
    }
}
