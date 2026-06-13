<?php

namespace App\Enums;

enum TransactionType: string
{
    case IN = 'in';
    case OUT = 'out';
    case ADJUST = 'adjust';

    public function color(): string
    {
        return match ($this) {
            self::IN => 'bg-green-100 text-green-700',
            self::OUT => 'bg-red-100 text-red-700',
            self::ADJUST => 'bg-yellow-100 text-yellow-700',
        };
    }

    public function lang(): string
    {
        return match ($this) {
            self::IN => trans('enums.transaction_type.in'),
            self::OUT => trans('enums.transaction_type.out'),
            self::ADJUST => trans('enums.transaction_type.adjust'),
        };
    }
}
