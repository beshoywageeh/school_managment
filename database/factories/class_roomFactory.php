<?php

namespace Database\Factories;

use App\Models\Grade;
use App\Models\User;
use App\Models\settings;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\class_room>
 */
class class_roomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['الصف الاول',"الصف الثاني","الصف الثالث","الصف الخامس","الصف السادس"]),
            'grade_id' => Grade::all()->unique()->random()->id,
            'user_id' => User::all()->random()->id,
            'slug'=>$this->faker->slug()
        ];

    }
}
