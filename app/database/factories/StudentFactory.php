<?php

namespace Database\Factories;

use App\Enums\Student_Status;
use App\Enums\user_religion;
use App\Enums\UserGender;
use App\Models\acadmice_year;
use App\Models\class_room;
use App\Models\Grade;
use App\Models\MyParent;
use App\Models\nationality;
use App\Models\Students;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends Factory<Students>
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
            'grade_id' => Grade::inRandomOrder()->first()?->id,
            'classroom_id' => function (array $attributes) {
                return class_room::where(
                    'grade_id',
                    $attributes['grade_id'],
                )
                    ->inRandomOrder()
                    ->first()?->id;
            },
            'parent_id' => MyParent::inRandomOrder()->first()?->id,
            'slug' => $this->faker->slug(),
            'student_status' => Arr::random(Student_Status::cases()),
            'birth_at_begin' => $this->faker->date(),
            'religion' => Arr::random(user_religion::cases()),
            'acadmiecyear_id' => acadmice_year::inRandomOrder()->first()
                ?->id,
            'tameen' => $this->faker->numberBetween(0, 1),
            'nationality_id' => nationality::inRandomOrder()->first()?->id,
            'school_id' => '1',
        ];
    }
}
