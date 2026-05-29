<?php

namespace App\Enums;

enum Payment_Status: string
{
    case OPEN = 'notpayed';
    case CLOSE = 'payed';
    case Waiting = 'pending';

    public function color(): string
    {
        return match ($this) {
            self::OPEN => 'bg-red-100 text-red-700',
            self::CLOSE => 'bg-green-100 text-green-700 disabled',
            self::Waiting => 'bg-yellow-100 text-yellow-700',
        };
    }

    public function lang(): string
    {
        return match ($this) {
            self::OPEN => trans('enums.payment_status.notpayed'),
            self::CLOSE => trans('enums.payment_status.payed'),
            self::Waiting => trans('enums.payment_status.waiting'),
        };
    }
}
