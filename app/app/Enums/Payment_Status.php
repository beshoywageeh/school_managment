<?php

namespace App\Enums;

enum Payment_Status: string
{
    case OPEN = 'unpaid';
    case NOT_PAID = 'not_paid';
    case CLOSE = 'paid';

    public function color(): string
    {
        return match ($this) {
            self::OPEN, self::NOT_PAID => 'bg-red-100 text-red-700',
            self::CLOSE => 'bg-green-100 text-green-700 disabled',
        };
    }

    public function lang(): string
    {
        return match ($this) {
            self::OPEN, self::NOT_PAID => trans('enums.payment_status.unpaid'),
            self::CLOSE => trans('enums.payment_status.paid'),
        };
    }
}
