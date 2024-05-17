<?php

namespace App\Enums;

enum Jobs_types: int
{
    case TEACHER = 1;
    case WORKER = 2;
    case ACCOUNTANT = 3;
    case MANEGMENT = 4;

    public function lang(): string
    {
        return match ($this) {
            self::TEACHER => trans('enums.teacher'),
            self::WORKER => trans('enums.worker'),
            self::ACCOUNTANT => trans('enums.accountant'),
            self::MANEGMENT => trans('enums.manegment'),
        };
    }
}
