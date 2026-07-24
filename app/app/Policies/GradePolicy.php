<?php

namespace App\Policies;

use App\Models\User;

class GradePolicy
{
    public function view(User $user): bool
    {
        return $user->can('grade-list');
    }

    public function create(User $user): bool
    {
        return $user->can('grade-create');
    }

    public function update(User $user): bool
    {
        return $user->can('grade-edit');
    }

    public function delete(User $user): bool
    {
        return $user->can('grade-delete');
    }
}
