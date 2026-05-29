<?php

namespace Database\Factories;

use App\Models\Grade;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name' => $this->faker->unique()->randomElement([
                'المرحلة الابتدائية', 'المرحلة الاعدادية', 'المرحلة الثانوية', 'مرحلة حضانة',
            ]),
            'user_id' => User::all()->random()->id,
            'slug' => $this->faker->slug(),
            'school_id' => '1',
        ];
    }
}
