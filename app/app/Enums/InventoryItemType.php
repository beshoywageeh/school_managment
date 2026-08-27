<?php

namespace App\Enums;

enum InventoryItemType: string
{
    case BOOK = 'book';
    case CLOTHE = 'clothe';
    case STOCK = 'stock';

    public function color(): string
    {
        return match ($this) {
            self::STOCK => 'bg-red-100 text-red-700',
            self::CLOTHE => 'bg-green-100 text-green-700',
            self::BOOK => 'bg-yellow-100 text-yellow-700',
        };
    }

    public function lang(): string
    {
        return match ($this) {
            self::STOCK => trans('enums.inventory_item_type.stock'),
            self::CLOTHE => trans('enums.inventory_item_type.clothing'),
            self::BOOK => trans('enums.inventory_item_type.book'),
        };
    }
}
