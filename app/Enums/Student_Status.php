<?php

namespace App\Enums;

enum Student_Status : int
{
    case NEW = 0;
    case TRASPORT_FROM = 1;
    case TRASPORT_TO = 2;
    case TOTAL_ABSENT = 3;
    case CHANGE_PATH = 4;
    case MERGE = 5;
    case SECOND_TRY = 6;
    case PASS_ON_LOW = 7;
    case REJECTED = 8;

    case FREEZED = 9;

    public function color(): string
    {
        return match ($this) {
            self::NEW => 'badge badge-pill badge-success',
            self::TRASPORT_FROM => 'badge badge-pill badge-warning',
            self::TRASPORT_TO => 'badge badge-pill badge-info',
            self::TOTAL_ABSENT => 'badge badge-pill badge-danger',
        };
    }
    public function lang(): string
    {
        return match ($this) {
            self::NEW => trans('enums.NEW'),
            self::TRASPORT_FROM => trans('enums.TRASPORT_FROM'),
            self::TRASPORT_TO => trans('enums.TRASPORT_TO'),
            self::CHANGE_PATH => trans('enums.CHANGE_PATH'),
            self::MERGE => trans('enums.MERGE'),
            self::SECOND_TRY => trans('enums.SECOND_TRY'),
            self::PASS_ON_LOW => trans('enums.PASS_ON_LOW'),
            self::REJECTED => trans('enums.REJECTED'),
            self::FREEZED => trans('enums.FREEZED'),
            self::TOTAL_ABSENT => trans('enums.TOTAL_ABSENT'),
        };
    }

}
