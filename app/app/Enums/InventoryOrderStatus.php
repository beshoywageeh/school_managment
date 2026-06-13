<?php

namespace App\Enums;

enum InventoryOrderStatus: string
{
    case NOT_PAID = 'not_paid';
    case PAID = 'paid';

    public function color(): string
    {
        return match ($this) {
            self::UNPAID => 'bg-red-100 text-red-700',
            self::PAID => 'bg-green-100 text-green-700 disabled',
        };
    }

    public function lang(): string
    {
        return match ($this) {
            self::UNPAID => trans('enums.inventory_order_status.unpaid'),
            self::PAID => trans('enums.inventory_order_status.paid'),
        };
    }
}
