<?php

namespace App\Enums;

enum Student_Status: string
{
    case NEW = 'new';
    case TRASPORT_FROM = 'transport_from';
    case TRASPORT_TO = 'transport_to';
    case TOTAL_ABSENT = 'total_absent';
    case CHANGE_PATH = 'change_path';
    case MERGE = 'merge';
    case SECOND_TRY = 'second_try';
    case PASS_ON_LOW = 'pass_on_low';
    case REJECTED = 'rejected';
    case FREEZED = 'freezed';
    case STILL = 'still';

    public function lang()
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
            self::STILL => trans('enums.STILL'),
        };
    }

    public static function fromString($std_status)
    {
        return match (strtolower($std_status)) {
            'new' => self::NEW,
            'transport_from' => self::TRASPORT_FROM,
            'transport_to' => self::TRASPORT_TO,
            'change_path' => self::CHANGE_PATH,
            'merge' => self::MERGE,
            'second_try' => self::SECOND_TRY,
            'pass_on_low' => self::PASS_ON_LOW,
            'reject' => self::REJECTED,
            'freeze' => self::FREEZED,
            'total_absent' => self::TOTAL_ABSENT,
            'still' => self::STILL,
            default => null,
        };
    }
}
