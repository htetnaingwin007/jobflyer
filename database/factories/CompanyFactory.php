<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1,2),
            'company_name' => $this->faker->sentence,
            'about_company' => $this->faker->paragraph,
            'industry' => $this->faker->sentence,
            'company_website' => $this->faker->sentence,
            'total_employee' => $this->faker->numberBetween(1,10),
        ];
    }
}
