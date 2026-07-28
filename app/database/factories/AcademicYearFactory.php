<?php

namespace Database\Factories;

use App\Enums\Status;
use App\Models\AcademicYear;
use App\Models\School;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends Factory<AcademicYear>
 */
class AcademicYearFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'year_start' => $this->faker->date('Y-m-d'),
            'year_end' => $this->faker->date('Y-m-d'),
            'view' => function (array $attributes) {
                return Carbon::parse($attributes['year_start'])->format(
                    'Y',
                ).
                    ' - '.
                    Carbon::parse($attributes['year_end'])->format('Y');
            },
            'status' => Arr::random(Status::cases()),
            'created_by' => '1',
            'school_id' => School::factory(),
        ];
    }
}
