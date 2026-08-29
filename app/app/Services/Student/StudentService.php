<?php

namespace App\Services\Student;

use App\Models\Student;

/**
 * Authoritative single path for persisting a Student model.
 *
 * Web-form creation is orchestrated by StudentRegeister; the repository and the
 * student import both delegate their final persistence here so that student
 * creation flows through one `Student::create` invocation.
 */
class StudentService
{
    /**
     * Persist a student from a fully-resolved attribute array.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function createStudent(array $attributes): Student
    {
        return Student::create($attributes);
    }
}
