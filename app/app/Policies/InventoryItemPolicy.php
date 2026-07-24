<?php

namespace App\Policies;

use App\Models\User;

class InventoryItemPolicy
{
    public function view(User $user): bool
    {
        return $user->can('stocks-index')
            || $user->can('clothes-index')
            || $user->can('books_sheets-index');
    }

    public function create(User $user): bool
    {
        return $user->can('stocks-create')
            || $user->can('clothes-create')
            || $user->can('books_sheets-create');
    }

    public function update(User $user): bool
    {
        return $user->can('stocks-update')
            || $user->can('clothes-update')
            || $user->can('books_sheets-update');
    }

    public function delete(User $user): bool
    {
        return $user->can('stocks-delete')
            || $user->can('clothes-delete')
            || $user->can('books_sheets-delete');
    }
}
