<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'address' => fake()->address(),
            'contact' => fake()->phoneNumber(),
            'guardian' => fake()->name(),
            'email' => fake()->safeEmail(),
            'age' => fake()->numberBetween($min = 18, $max = 22),
            'gender' => fake()->randomElement(['Male', 'Female']),
        ];
    }
}
