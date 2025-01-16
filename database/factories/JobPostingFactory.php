<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobPosting>
 */
class JobPostingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'date_posted' => fake()->dateTimeBetween('-2 weeks', 'now'),
            'base_salary' => fake()->numberBetween(25000, 250000),
            'salary_currency' => fake()->currencyCode(),
        ];
    }
}
