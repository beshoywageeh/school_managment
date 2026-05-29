<?php

namespace App\Enums;

enum Payment_Type: string
{
    case FEE_INVOICE = 'invoice';
    case PAYMENT = 'payment';
    case EXCEPTION = 'exciption';
    case Exchange_Bond = 'exchange';

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
