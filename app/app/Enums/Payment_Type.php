<?php

namespace App\Enums;

enum Payment_Type: string
{
    case FEE_INVOICE = 'invoice';
    case PAYMENT = 'payment';
    case EXCEPTION = 'exciption';
    case EXCHANGE_BOND = 'exchange';

    public function lang(): string
    {
        return match ($this) {
            self::FEE_INVOICE => trans('enums.payment_type.fee_invoice'),
            self::PAYMENT => trans('enums.payment_type.payment_recipt'),
            self::EXCEPTION => trans('enums.payment_type.fee_exception'),
            self::EXCHANGE_BOND => trans(
                'enums.payment_type.exchange_bond',
            ),
        };
    }
}
