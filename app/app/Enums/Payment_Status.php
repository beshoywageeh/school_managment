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

    /**
     * Map a report payment-status filter to the DB enum values it selects.
     *
     * The "unpaid" filter covers all outstanding amounts (unpaid + not_paid);
     * "paid" covers only the paid status; "all"/unknown input yields null
     * (meaning: no status clause is applied).
     *
     * @return array{0: 'unpaid', 1: 'not_paid'}|array{0: 'paid'}|null
     */
    public static function filterValues(string $filter): ?array
    {
        return match ($filter) {
            'unpaid' => [self::OPEN->value, self::NOT_PAID->value],
            'paid' => [self::CLOSE->value],
            default => null,
        };
    }
}
