<?php

namespace App\Observers;

use App\Listeners\LogStudentActivity;
use App\Models\Student;

class GenerateStudentCode
{
    /**
     * Handle the Student "creating" event.
     *
     * Student codes are globally unique, so the lookup must bypass the
     * per-school global scope — otherwise a user only ever sees their own
     * school and the same code gets handed out twice.
     */
    public function creating(Student $student): void
    {
        $nextCode = ((int) Student::withoutGlobalScopes()->max('code')) + 1;

        $student->code = str_pad((string) $nextCode, 6, '0', STR_PAD_LEFT);
    }

    public function created(Student $student): void
    {
        LogStudentActivity::dispatch($student, 'created');
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
