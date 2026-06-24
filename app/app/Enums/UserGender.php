<?php

namespace App\Enums;

enum UserGender: string
{
    case MALE = 'male';
    case FEMALE = 'female';

    public function lang(): string
    {
        return match ($this) {
            self::MALE => trans('enums.male'),
            self::FEMALE => trans('enums.female'),
        };
    }

    public static function fromString(string $gender): ?self
    {
        return match (strtolower($gender)) {
            'male' => self::MALE,
            'female' => self::FEMALE,
            default => null,
        };
    }
}
