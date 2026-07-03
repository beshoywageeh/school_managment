<?php

namespace Database\Factories;

use App\Enums\Student_Status;
use App\Enums\user_religion;
use App\Enums\UserGender;
use App\Models\AcademicYear;
use App\Models\ClassRoom;
use App\Models\Grade;
use App\Models\MyParent;
use App\Models\nationality;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->numerify('########'),
            'name' => $this->faker->name(),
            'birth_date' => $this->faker->date(),
            'address' => $this->faker->address(),
            'join_date' => $this->faker->date(),
            'gender' => Arr::random(UserGender::cases()),
            'national_id' => $this->faker->numerify('##############'),
            'user_id' => '1',
            'grade_id' => Grade::inRandomOrder()->first()?->id ?? 1,
            'classroom_id' => function (array $attributes) {
                return ClassRoom::where(
                    'grade_id',
                    $attributes['grade_id'],
                )
                    ->inRandomOrder()
                    ->first()?->id ?? 1;
            },
            'parent_id' => MyParent::inRandomOrder()->first()?->id ?? 1,
            'student_status' => Arr::random(Student_Status::cases()),
            'birth_at_begin' => $this->faker->date(),
            'religion' => Arr::random(user_religion::cases()),
            'acadmiecyear_id' => AcademicYear::inRandomOrder()->first()
                ?->id ?? 1,
            'nationality_id' => nationality::inRandomOrder()->first()?->id ?? 1,
            'school_id' => '1',
        ];
    }
}
