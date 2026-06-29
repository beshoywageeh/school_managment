<?php

namespace Database\Factories;

use App\Models\MyParent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<MyParent>
 */
class MyParentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'father_name' => $this->faker->firstName,
            'father_national_id' => $this->faker->numerify('##############'),
            'father_phone' => $this->faker->phoneNumber,
            'father_job' => $this->faker->jobTitle,
            'father_birth_date' => $this->faker->date(),
            'father_learning' => $this->faker->randomElement(['High School', 'Bachelor', 'Master']),

            // Mother information
            'mother_name' => $this->faker->firstName,
            'mother_national_id' => $this->faker->numerify('############'),
            'mother_phone' => $this->faker->phoneNumber,
            'mother_job' => $this->faker->jobTitle,
            'religion' => $this->faker->numberBetween(0, 1),
            'address' => $this->faker->address,
            'mother_birth_date' => $this->faker->date(),
            'user_id' => '1',
            'slug' => $this->faker->slug(),
            'school_id' => '1',
        ];
    }
}
