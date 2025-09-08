<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\settings>
 */
class settingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'name' => 'مدرسة المحبة الخاصة',
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'slug' => $this->faker->slug(),
            'heading_right' => $this->faker->word(),
            'heading_left' => $this->faker->word(),

        ];
    }
}
