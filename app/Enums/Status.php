<?php

namespace App\Enums;

enum Status: int
{
    case OPEN = 0;
    case CLOSE = 1;

    public function color(): string
    {
        return match ($this) {
            self::OPEN => 'badge-soft-success',
            self::CLOSE => 'badge-soft-danger',
        };
    }
    public function lang(): string
    {
        return match ($this) {
            self::OPEN => trans('enums.open'),
            self::CLOSE => trans('enums.close'),
        };
    }
}
