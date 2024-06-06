<?php

namespace App\Enums;

enum Payment_Status: int
{
    case OPEN = 0;
    case CLOSE = 1;
    case Waiting = 2;

    public function color(): string
    {
        return match ($this) {
            self::OPEN => 'btn-danger',
            self::CLOSE => 'btn-success disabled',
            self::Waiting=> 'btn-warning',
        };
    }
    public function lang(): string
    {
        return match ($this) {
            self::OPEN => trans('enums.open'),
            self::CLOSE => trans('enums.close'),
            self::Waiting => trans('enums.waiting'),
        };
    }
}
