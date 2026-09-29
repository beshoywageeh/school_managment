<?php

namespace App\Policies;

use App\Models\User;

class ReportPolicy
{
    /**
     * Users may open the report index.
     */
    public function view(User $user): bool
    {
        return $user->checkPermissionTo('reports-view')
            || $user->checkPermissionTo('reports-manage');
    }

    /**
     * Users may run report exports.
     *
     * `checkPermissionTo()` is used rather than `hasPermissionTo()` because the
     * latter throws `PermissionDoesNotExist` when the permission row is absent
     * from the database, which would turn a simple 403 into a 500.
     */
    public function export(User $user): bool
    {
        return $user->checkPermissionTo('reports-export')
            || $user->checkPermissionTo('reports-manage');
    }
}
