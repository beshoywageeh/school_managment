<?php

namespace App\Enums;

enum user_religion: int
{
    case CHRISTIAN = 0;
    case MUSLIM = 1;

    public function lang()
    {
        return match ($this) {
            self::CHRISTIAN => trans('enums.christian'),
            self::MUSLIM => trans('enums.muslim'),
        };
    }

    public static function fromString($religion)
    {
        return match (strtolower($religion)) {
            'christian' => self::CHRISTIAN,
            'muslim' => self::MUSLIM,
            default => null,
        };
    }
}
