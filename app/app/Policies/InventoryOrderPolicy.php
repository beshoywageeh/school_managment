<?php

namespace App\Policies;

use App\Models\User;

class InventoryOrderPolicy
{
    public function view(User $user): bool
    {
        return $user->can('stocks-inventory_order-index')
            || $user->can('clothes-inventory_order')
            || $user->can('books_sheets-inventory_order');
    }

    public function create(User $user): bool
    {
        return $user->can('stocks-income_order')
            || $user->can('stocks-outcome_order')
            || $user->can('clothes-income_order')
            || $user->can('clothes-outcome_order')
            || $user->can('books_sheets-income_order')
            || $user->can('books_sheets-outcome_order');
    }

    public function update(User $user): bool
    {
        return $user->can('stocks-inventory_edit')
            || $user->can('clothes-income_order-update')
            || $user->can('clothes-outcome_order-update')
            || $user->can('clothes-inventory_order-update')
            || $user->can('books_sheets-income_order-update')
            || $user->can('books_sheets-outcome_order-update')
            || $user->can('books_sheets-inventory_order-update')
            || $user->can('order-edit')
            || $user->can('order_out-edit');
    }

    public function delete(User $user): bool
    {
        return $user->can('stocks-inventory_delete')
            || $user->can('clothes-income_order_delete')
            || $user->can('clothes-outcome_order-delete')
            || $user->can('clothes-inventory_order-delete')
            || $user->can('books_sheets-income_order_delete')
            || $user->can('books_sheets-outcome_order-delete')
            || $user->can('books_sheets-inventory_order-delete')
            || $user->can('order-delete')
            || $user->can('order_out-delete');
    }
}
