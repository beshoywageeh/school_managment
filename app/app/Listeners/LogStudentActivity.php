<?php

namespace App\Listeners;

use App\Events\FeePaymentReceived;
use App\Events\StudentCreated;
use App\Events\StudentUpdated;
use App\Jobs\LogActivityJob;
use App\Models\Student;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class LogStudentActivity implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(
        public ?Student $student = null,
        public ?string $action = null,
    ) {}

    public function handle(StudentCreated|StudentUpdated|FeePaymentReceived|null $event = null): void
    {
        if ($event instanceof StudentCreated) {
            $student = $event->student;
            $action = 'created';
        } elseif ($event instanceof StudentUpdated) {
            $student = $event->student;
            $action = 'updated';
        } elseif ($event instanceof FeePaymentReceived) {
            $student = $event->student;
            $action = 'fee_payment_received';
        } else {
            $student = $this->student;
            $action = $this->action;
        }

        if (! $student) {
            return;
        }

        LogActivityJob::dispatch(
            userId: $student->user_id ?? auth()->id() ?? 0,
            action: $action,
            description: 'Student '.$action.': '.$student->name,
            ip: request()->ip() ?? '127.0.0.1',
            userAgent: request()->userAgent(),
            schoolId: $student->school_id,
            modelType: $student->getMorphClass(),
            modelId: $student->id,
        );
    }
}
