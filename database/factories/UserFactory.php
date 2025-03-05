<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->numberBetween(100000, 9999999999),
            'name' => $this->faker->firstName(),
            'phone' => $this->faker->optional()->phoneNumber(),
            'address' => $this->faker->optional()->address(),
            'date_of_birth' => $this->faker->optional()->date(),
            'date_of_hiring' => $this->faker->optional()->date(),
            'learning' => $this->faker->optional()->randomElement(['High School', 'Bachelor', 'Master']),
            'reiligon' => $this->faker->numberBetween(0, 1),
            'type' => $this->faker->numberBetween(1, 4),
            'email_verified_at' => $this->faker->optional()->dateTime(),
            'email' => $this->faker->unique()->safeEmail(),
            'isAdmin' => '1',
            'login_allow' => '1',
            'password' => \Hash::make('hypervision'),
            'school_id' => '1',

        ];
    }
}
