<?php

namespace App\Enums;

enum InventoryItemCategory: string
{
    case BOOK = 'book';
    case SHEET = 'sheet';

    public function color(): string
    {
        return match ($this) {
            self::BOOK => 'bg-yellow-100 text-yellow-700',
            self::SHEET => 'bg-blue-100 text-blue-700',
        };
    }

    public function lang(): string
    {
        return match ($this) {
            self::BOOK => trans('enums.inventory_item_type.book'),
            self::SHEET => trans('book_sheet.sheet'),
        };
    }
}
