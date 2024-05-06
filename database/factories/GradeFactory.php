<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    const GRADENAMES = [
        'الابتدائية', 'الاعدادية', 'الثانوي', 'حضانة',
    ];

    public function definition(): array
    {

        return [
            'Grade_Name' => static::GRADENAMES[array_rand(static::GRADENAMES)],
            'user_id' => '1',
        ];
    }
}
