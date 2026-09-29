<?php

namespace App\Providers;

use App\Models\ClassRoom;
use App\Models\Employee;
use App\Models\FeeInvoice;
use App\Models\Grade;
use App\Models\Inventory\InventoryItem;
use App\Models\Inventory\InventoryOrder;
use App\Models\Student;
use App\Models\User;
use App\Policies\ClassPolicy;
use App\Policies\EmployeePolicy;
use App\Policies\FeeInvoicePolicy;
use App\Policies\GradePolicy;
use App\Policies\InventoryItemPolicy;
use App\Policies\InventoryOrderPolicy;
use App\Policies\ReportPolicy;
use App\Policies\StudentPolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Student::class => StudentPolicy::class,
        FeeInvoice::class => FeeInvoicePolicy::class,
        User::class => UserPolicy::class,
        Employee::class => EmployeePolicy::class,
        InventoryItem::class => InventoryItemPolicy::class,
        InventoryOrder::class => InventoryOrderPolicy::class,
        Grade::class => GradePolicy::class,
        ClassRoom::class => ClassPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * Report abilities are delegated to {@see ReportPolicy} instead of relying
     * on the raw permission name. Spatie registers a `Gate::before` hook that
     * grants any ability the user holds directly, so these definitions act as
     * the fallback: they run when the before-hook declines, which is what makes
     * the `reports-manage` bypass in the policy reachable.
     */
    public function boot(): void
    {
        Gate::define('reports-view', [ReportPolicy::class, 'view']);
        Gate::define('reports-export', [ReportPolicy::class, 'export']);
    }
}
