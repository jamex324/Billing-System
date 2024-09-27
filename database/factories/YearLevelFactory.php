<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\YearLevel>
 */
class YearLevelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $years = ['1st year', '2nd year', '3rd year', '4th year'];

        return [
            'year' => $this->faker->randomElement($years),
        ];
    }
}
