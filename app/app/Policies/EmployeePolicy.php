<?php

namespace App\Policies;

use App\Models\User;

class EmployeePolicy
{
    public function view(User $user): bool
    {
        return $user->can('employees-list');
    }

    public function create(User $user): bool
    {
        return $user->can('employees-create');
    }

    public function update(User $user): bool
    {
        return $user->can('employees-edit');
    }

    public function delete(User $user): bool
    {
        return $user->can('employees-delete');
    }
}
