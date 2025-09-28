<?php

namespace App\Enums;

enum Jobs_types: int
{
    case TEACHER = 1;
    case WORKER = 2;
    case SPECIALIST = 3;
    case MANEGMENT = 4;
    case DEALER = 5;
    case DIRECTOR = 6;
    case MENTOR = 7;
    case SECURITY = 8;
    case CLEANER_SUPERVISIOR = 9;
    case VISITOR = 10;
    case OTHER = 11;

    public function lang(): string
    {
        return match ($this) {
            self::TEACHER => trans('enums.teacher'),
            self::WORKER => trans('enums.worker'),
            self::SPECIALIST => trans('enums.specialist'),
            self::MANEGMENT => trans('enums.manegment'),
            self::DEALER => trans('enums.dealer'),
            self::DIRECTOR => trans('enums.director'),
            self::MENTOR => trans('enums.mentor'),
            self::SECURITY => trans('enums.security'),
            self::CLEANER_SUPERVISIOR => trans('enums.cleaner_supervisior'),
            self::VISITOR => trans('enums.visitor'),
            self::OTHER => trans('enums.other'),
        };
    }

    public static function fromString(string $std_status): ?self
    {
        return match ($std_status) {
            'TEACHER' => self::TEACHER,
            'WORKER' => self::WORKER,
            'SPECIALIST' => self::SPECIALIST,
            'MANEGMENT' => self::MANEGMENT,
            'DEALER' => self::DEALER,
            'DIRECTOR' => self::DIRECTOR,
            'MENTOR' => self::MENTOR,
            'SECURITY' => self::SECURITY,
            'CLEANER_SUPERVISIOR' => self::CLEANER_SUPERVISIOR,
            'VISITOR' => self::VISITOR,
            'OTHER' => self::OTHER,
        };
    }
}
