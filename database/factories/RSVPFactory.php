<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RSVP>
 */
class RSVPFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'FirstName' => fake()->firstName(),
            'LastName' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'number' => fake()->phoneNumber(),
            'Accept' =>fake()->boolean(),
            'Confirm' => 0
        ];
    }
}
