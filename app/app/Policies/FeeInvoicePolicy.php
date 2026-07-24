<?php

namespace App\Policies;

use App\Models\User;

class FeeInvoicePolicy
{
    public function view(User $user): bool
    {
        return $user->can('fee_invoice-list');
    }

    public function create(User $user): bool
    {
        return $user->can('fee_invoice-create');
    }

    public function update(User $user): bool
    {
        return $user->can('fee_invoice-edit');
    }

    public function delete(User $user): bool
    {
        return $user->can('fee_invoice-delete');
    }
}
