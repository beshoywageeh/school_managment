<?php

namespace App\Enums;

enum Payment_Status: string
{
    case OPEN = 'unpaid';
    case CLOSE = 'paid';

    public function color(): string
    {
        return match ($this) {
            self::OPEN => 'bg-red-100 text-red-700',
            self::CLOSE => 'bg-green-100 text-green-700 disabled',
        };
    }

    public function lang(): string
    {
        return match ($this) {
            self::OPEN => trans('enums.payment_status.unpaid'),
            self::CLOSE => trans('enums.payment_status.paid'),
        };
    }
}
