<?php

namespace Database\Factories;
use App\Models\settings;
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
            'first_name' => $this->faker->firstName(),
            'second_name' => $this->faker->lastName(),
            'third_name' => $this->faker->optional()->firstName(),
            'forth_name' => $this->faker->optional()->lastName(),
            'phone' => $this->faker->optional()->phoneNumber(),
            'address' => $this->faker->optional()->address(),
            'date_of_birth' => $this->faker->optional()->date(),
            'date_of_hiring' => $this->faker->optional()->date(),
            'learning' => $this->faker->optional()->randomElement(['High School', 'Bachelor', 'Master']),
            'reiligon' => $this->faker->numberBetween(0,1),
            'email_verified_at' => $this->faker->optional()->dateTime(),
            'email' => 'a@a.com',
            'isAdmin' => '1',
            'login_allow' => '1',
            'password' => \Hash::make('hypervision'),
            'slug'=>$this->faker->slug()

        ];
    }
}