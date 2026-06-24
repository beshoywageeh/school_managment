<?php

namespace Database\Factories;

use App\Enums\Jobs_types;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends Factory<User>
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
            'code' => $this->faker
                ->unique()
                ->numberBetween(100000, 9999999999),
            'name' => 'Administrator',
            'phone' => $this->faker->optional()->phoneNumber(),
            'address' => 'admin@ischool.com',
            'date_of_birth' => $this->faker->optional()->date(),
            'date_of_hiring' => $this->faker->optional()->date(),
            'learning' => $this->faker
                ->optional()
                ->randomElement(['High School', 'Bachelor', 'Master']),
            'reiligon' => $this->faker->numberBetween(0, 1),
            'type' => Arr::Random(Jobs_types::cases()),
            'email_verified_at' => $this->faker->optional()->dateTime(),
            'email' => 'admin@ischool.com',
            'isAdmin' => '1',
            'login_allow' => '1',
            'password' => \Hash::make('hypervision'),
            'school_id' => '1',
        ];
    }
}
