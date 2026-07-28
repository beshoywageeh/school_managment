<?php

namespace Database\Factories;

use App\Models\AcademicYear;
use App\Models\ClassRoom;
use App\Models\Grade;
use App\Models\School;
use App\Models\SchoolFee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<SchoolFee>
 */
class SchoolFeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'grade_id' => Grade::all('id')->random(),
            'classroom_id' => ClassRoom::all('id')->random(),
            'user_id' => '1',
            'description' => $this->faker->words(1, true),
            'amount' => $this->faker->numberBetween('1000', '8000'),
            'title' => $this->faker->randomElement([
                'قسط اول',
                'قسط ثاني',
                'قسط ثالث',
            ]),
            'academic_year_id' => AcademicYear::inRandomOrder()->first()
                ?->id,
            'school_id' => School::factory(),
        ];
    }
}
