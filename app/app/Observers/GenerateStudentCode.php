<?php

namespace App\Observers;

use App\Models\Student;

class GenerateStudentCode
{
    /**
     * Handle the Student "creating" event.
     */
    public function creating(Student $student): void
    {
        $latestStudent = Student::latest('id')->first();
        $nextId = $latestStudent ? $latestStudent->id + 1 : 1;
        $student->code = str_pad($nextId, 6, '0', STR_PAD_LEFT);
    }

    /**
     * Handle the Student "updated" event.
     */
    public function updated(Student $student): void
    {
        //
    }

    /**
     * Handle the Student "deleted" event.
     */
    public function deleted(Student $student): void
    {
        //
    }

    /**
     * Handle the Student "restored" event.
     */
    public function restored(Student $student): void
    {
        //
    }

    /**
     * Handle the Student "force deleted" event.
     */
    public function forceDeleted(Student $student): void
    {
        //
    }
}
