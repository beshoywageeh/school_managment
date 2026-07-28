<?php

namespace App\Policies;

use App\Models\User;

class SchedulePolicy
{
    public function view(User $user): bool
    {
        return $user->hasPermissionTo('schedules-view')
            || $user->hasPermissionTo('schedules-manage');
    }

    public function create(User $user): bool
    {
        return $user->hasPermissionTo('schedules-create')
            || $user->hasPermissionTo('schedules-manage');
    }

    public function update(User $user): bool
    {
        return $user->hasPermissionTo('schedules-update')
            || $user->hasPermissionTo('schedules-manage');
    }

    public function delete(User $user): bool
    {
        return $user->hasPermissionTo('schedules-delete')
            || $user->hasPermissionTo('schedules-manage');
    }
}
