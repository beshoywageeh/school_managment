<?php

namespace Database\Factories;

use App\Models\ClassRoom;
use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ClassRoom>
 */
class ClassRoomFactory extends Factory
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
                'الصف الاول',
                'الصف الثاني',
                'الصف الثالث',
                'الصف الرابع',
                'الصف الخامس',
                'الصف السادس',
            ]),
            'grade_id' => Grade::inRandomOrder()->first()?->id ?? 1,
            'user_id' => '1',
            'school_id' => '1',
        ];
    }
}
