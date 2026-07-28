<?php

namespace App\Policies;

use App\Models\User;

class ReportPolicy
{
    public function view(User $user): bool
    {
        return $user->hasPermissionTo('reports-view')
            || $user->hasPermissionTo('reports-manage');
    }

    public function export(User $user): bool
    {
        return $user->hasPermissionTo('reports-export')
            || $user->hasPermissionTo('reports-manage');
    }
}
