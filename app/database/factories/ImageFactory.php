<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'filename' => $this->faker->randomElement(['heather-allison.png', 'teegan-horne.png']),
            'imageable_id' => $this->faker->numberBetween(1, 5),
            'imageable_type' => 'App\Models\School',
        ];
    }
}
