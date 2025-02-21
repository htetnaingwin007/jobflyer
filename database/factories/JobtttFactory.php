<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobttt>
 */
class JobtttFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'job_title' => $this->faker->sentence,
            'job_region_id' => $this->faker->numberbetween(1,10),
            'company_id' => $this->faker->numberBetween(1,10),
            'job_type' => $this->faker->sentence,
            'vacancy' => $this->faker->numberBetween(1, 10),
            'experience' => $this->faker->sentence,
            'salary' => $this->faker->numberbetween(10000, 50000),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'application_deadline' => $this->faker->date,
            'job_description' => $this->faker->paragraph,
            'responsibilities' => $this->faker->paragraph,
            'education_experience' => $this->faker->paragraph,
            'other_benefits' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl,
            'category_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
