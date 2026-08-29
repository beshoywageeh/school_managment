<?php

namespace Database\Factories;

use App\Models\AcademicYear;
use App\Models\ClassRoom;
use App\Models\FeeInvoice;
use App\Models\Grade;
use App\Models\MyParent;
use App\Models\Nationality;
use App\Models\School;
use App\Models\SchoolFee;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<FeeInvoice>
 */
class FeeInvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $school = School::query()->first() ?? School::factory()->create();
        $academicYear = AcademicYear::factory()->create([
            'school_id' => $school->id,
        ]);
        $grade = Grade::factory()->create([
            'school_id' => $school->id,
            'user_id' => '1',
        ]);
        $classroom = ClassRoom::factory()->create([
            'grade_id' => $grade->id,
            'school_id' => $school->id,
        ]);
        $parent = MyParent::factory()->create([
            'school_id' => $school->id,
        ]);
        $nationality = Nationality::create(['name' => 'Nationality-'.$this->faker->word]);
        $student = Student::factory()->create([
            'school_id' => $school->id,
            'grade_id' => $grade->id,
            'classroom_id' => $classroom->id,
            'parent_id' => $parent->id,
            'nationality_id' => $nationality->id,
            'acadmiecyear_id' => $academicYear->id,
        ]);
        $schoolFee = SchoolFee::factory()->create([
            'school_id' => $school->id,
            'grade_id' => $grade->id,
            'classroom_id' => $classroom->id,
            'academic_year_id' => $academicYear->id,
        ]);

        return [
            'invoice_date' => $this->faker->date('Y-m-d'),
            'student_id' => $student->id,
            'grade_id' => $grade->id,
            'classroom_id' => $classroom->id,
            'academic_year_id' => $academicYear->id,
            'school_fee_id' => $schoolFee->id,
            'school_id' => $school->id,
            'user_id' => '1',
        ];
    }
}
