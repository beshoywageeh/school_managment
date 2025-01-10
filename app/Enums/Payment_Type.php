<?php

namespace App\Enums;

enum Payment_Type: int
{
    case FEE_INVOICE = 1;
    case PAYMENT = 2;
    case EXCEPTION = 3;
    case Exchange_Bond = 4;

    public function lang(): string
    {
        return match ($this) {
            self::FEE_INVOICE => trans('enums.fee_invoice'),
            self::PAYMENT => trans('enums.payment_recipt'),
            self::EXCEPTION => trans('enums.fee_exception'),
            self::Exchange_Bond => trans('enums.exchange_bond'),
        };
    }
}
