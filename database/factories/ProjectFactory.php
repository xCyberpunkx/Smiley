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
    public function definition(): array
    {
        return [
            "name"=> $this->faker->sentence(),
            "description" => $this->faker->realText(),
            "due_date"=> $this->faker->dateTimeBetween('now','+1 year'),
            'status'=> $this->faker->randomElement(['pending','in_progress','done']),
            'image_path'=> $this->faker->imageUrl('50','50'),
            'created_by' => 1,
            'updated_by'=> 1,
            'created_at' => time(),
            'updated_at'=> time(),
        ];
    }
}
