<?php

namespace App\Policies;

use App\Models\User;

class StudentPolicy
{
    public function view(User $user): bool
    {
        return $user->can('Students-list');
    }

    public function create(User $user): bool
    {
        return $user->can('Students-create');
    }

    public function update(User $user): bool
    {
        return $user->can('Students-edit');
    }

    public function delete(User $user): bool
    {
        return $user->can('Students-delete');
    }
}
