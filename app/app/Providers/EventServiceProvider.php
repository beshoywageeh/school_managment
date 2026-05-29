<?php

namespace App\Providers;

use App\Events\FeePaymentReceived;
use App\Events\StudentCreated;
use App\Events\StudentUpdated;
use App\Listeners\LogStudentActivity;
use App\Models\Student;
use App\Observers\GenerateStudentCode;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        StudentCreated::class => [
            LogStudentActivity::class,
        ],
        StudentUpdated::class => [
            LogStudentActivity::class,
        ],
        FeePaymentReceived::class => [
            LogStudentActivity::class,
        ],
    ];

    public function boot(): void
    {
        Student::observe(GenerateStudentCode::class);
    }

    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
