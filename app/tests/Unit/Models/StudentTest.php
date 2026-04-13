<?php

namespace Tests\Unit\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Tests\TestCase;

class StudentTest extends TestCase
{
    protected Student $student;

    protected function setUp(): void
    {
        parent::setUp();
        $this->student = new Student;
    }

    public function test_student_has_fillable_attributes(): void
    {
        $fillable = [
            'name',
            'gender',
            'birth_date',
            'parent_id',
            'user_id',
            'grade_id',
            'classroom_id',
            'address',
            'join_date',
            'national_id',
            'birth_at_begin',
            'student_status',
            'religion',
            'code',
            'acadmiecyear_id',
            'nationality_id',
            'school_id',
        ];

        $this->assertEquals($fillable, $this->student->getFillable());
    }

    public function test_student_has_casts(): void
    {
        $casts = [
            'gender',
            'religion',
            'student_status',
        ];

        foreach ($casts as $attribute) {
            $this->assertArrayHasKey($attribute, $this->student->getCasts());
        }
    }

    public function test_student_belongs_to_user(): void
    {
        $relation = $this->student->user();

        $this->assertInstanceOf(BelongsTo::class, $relation);
        $this->assertEquals('user_id', $relation->getForeignKeyName());
    }

    public function test_student_belongs_to_grade(): void
    {
        $relation = $this->student->grade();

        $this->assertInstanceOf(BelongsTo::class, $relation);
        $this->assertEquals('grade_id', $relation->getForeignKeyName());
    }

    public function test_student_belongs_to_classroom(): void
    {
        $relation = $this->student->classroom();

        $this->assertInstanceOf(BelongsTo::class, $relation);
        $this->assertEquals('classroom_id', $relation->getForeignKeyName());
    }

    public function test_student_belongs_to_parent(): void
    {
        $relation = $this->student->parent();

        $this->assertInstanceOf(BelongsTo::class, $relation);
        $this->assertEquals('parent_id', $relation->getForeignKeyName());
    }

    public function test_student_has_many_student_accounts(): void
    {
        $relation = $this->student->StudentAccount();

        $this->assertInstanceOf(HasMany::class, $relation);
    }

    public function test_student_has_many_fee_invoices(): void
    {
        $relation = $this->student->fee_invoice();

        $this->assertInstanceOf(HasMany::class, $relation);
    }

    public function test_student_belongs_to_nationality(): void
    {
        $relation = $this->student->nationality();

        $this->assertInstanceOf(BelongsTo::class, $relation);
    }

    public function test_student_uses_soft_deletes(): void
    {
        $this->assertTrue(in_array('Illuminate\Database\Eloquent\SoftDeletes', class_uses_recursive($this->student)));
    }
}
