<?php

namespace App\Policies;

use App\Models\User;

class ClassPolicy
{
    public function view(User $user): bool
    {
        return $user->can('classes-list');
    }

    public function create(User $user): bool
    {
        return $user->can('classes-create');
    }

    public function update(User $user): bool
    {
        return $user->can('classes-update');
    }

    public function delete(User $user): bool
    {
        return $user->can('classes-delete');
    }
}
