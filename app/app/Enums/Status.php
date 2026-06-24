<?php

namespace App\Enums;

enum Status: string
{
    case OPEN = 'active';
    case CLOSE = 'inactive';

    public function color(): string
    {
        return match ($this) {
            self::OPEN => 'badge badge-pill badge-success',
            self::CLOSE => 'badge badge-pill badge-danger',
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
