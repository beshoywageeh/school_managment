<?php

namespace Tests\Unit\Models;

use App\Models\class_room;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Tests\TestCase;

class ClassRoomTest extends TestCase
{
    protected class_room $classRoom;

    protected function setUp(): void
    {
        parent::setUp();
        $this->classRoom = new class_room;
    }

    public function test_class_room_has_correct_fillable_attributes(): void
    {
        $fillable = [
            'name',
            'grade_id',
            'user_id',
            'tameen',
            'school_id',
        ];

        $this->assertEquals($fillable, $this->classRoom->getFillable());
    }

    public function test_class_room_belongs_to_user(): void
    {
        $relation = $this->classRoom->user();

        $this->assertInstanceOf(BelongsTo::class, $relation);
        $this->assertEquals('user_id', $relation->getForeignKeyName());
    }

    public function test_class_room_belongs_to_grade(): void
    {
        $relation = $this->classRoom->grade();

        $this->assertInstanceOf(BelongsTo::class, $relation);
        $this->assertEquals('grade_id', $relation->getForeignKeyName());
    }

    public function test_class_room_has_many_students(): void
    {
        $relation = $this->classRoom->students();

        $this->assertInstanceOf(HasMany::class, $relation);
    }

    public function test_class_room_uses_soft_deletes(): void
    {
        $this->assertTrue(in_array('Illuminate\Database\Eloquent\SoftDeletes', class_uses_recursive($this->classRoom)));
    }
}
