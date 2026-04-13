<?php

namespace App\Listeners;

use App\Events\StudentCreated;
use App\Events\StudentUpdated;
use App\Models\ActivityLog;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;

class LogStudentActivity implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle(StudentCreated $event): void
    {
        ActivityLog::create([
            'user_id' => Auth::id(),
            'action' => 'created',
            'description' => trans('log.models.student.created', ['student_name' => $event->student->name]),
        ]);
    }

    public function handleStudentUpdated(StudentUpdated $event): void
    {
        $changes = implode(', ', array_keys($event->changes));

        ActivityLog::create([
            'user_id' => Auth::id(),
            'action' => 'updated',
            'description' => trans('log.models.student.updated', [
                'student_name' => $event->student->name,
                'changes' => $changes,
            ]),
        ]);
    }
}
