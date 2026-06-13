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
        $user = Auth::user();

        ActivityLog::create([
            "user_id" => $user?->id,
            "action" => trans("log.actions.added"),
            "description" => trans("log.models.student.created", [
                "student_name" => $event->student->name,
            ]),
            "school_id" => $user?->school_id,
            "ip" => request()->ip() ?? "127.0.0.1",
            "user_agent" => request()->userAgent() ?? "CLI",
            "model_type" => get_class($event->student),
            "model_id" => $event->student->id,
        ]);
    }

    public function handleStudentUpdated(StudentUpdated $event): void
    {
        $changes = implode(", ", array_keys($event->changes));

        ActivityLog::create([
            "user_id" => Auth::id(),
            "action" => "updated",
            "description" => trans("log.models.student.updated", [
                "student_name" => $event->student->name,
                "changes" => $changes,
            ]),
        ]);
    }
    public function handleFeePaymentReceived(
        FeePaymentReceived $event,
    ): void {
        $user = Auth::user();

        ActivityLog::create([
            "user_id" => $user?->id,
            "action" => trans("log.actions.paid_partially"),
            "description" => trans(
                "log.models.payment_part.paid_partially",
                [
                    "name" => $event->student->name,
                    "amount" => $event->amount,
                ],
            ),
            "school_id" => $user?->school_id,
            "ip" => request()->ip() ?? "127.0.0.1",
            "user_agent" => request()->userAgent() ?? "CLI",
            "model_type" => get_class($event->payment),
            "model_id" => $event->payment->id,
        ]);
    }
}
