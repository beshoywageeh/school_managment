<?php

namespace App\Enums;

enum InventoryOrderType: string
{
    case INVENTORY = 'inventory';
    case SALES = 'sales';
    case GARD = 'gard';

    public function color(): string
    {
        return match ($this) {
            self::INVENTORY => 'bg-red-100 text-red-700',
            self::SALES => 'bg-green-100 text-green-700',
            self::GARD => 'bg-purple-100 text-purple-700',
        };
    }

    public function lang(): string
    {
        return match ($this) {
            self::INVENTORY => trans('enums.inventory_order_type.inventory'),
            self::SALES => trans('enums.inventory_order_type.sales'),
            self::GARD => trans('enums.inventory_order_type.gard'),
        };
    }
}
