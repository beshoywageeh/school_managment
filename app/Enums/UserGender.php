<?php
namespace App\Enums;
enum UserGender: int
{
    case MALE=0;
    case FEMALE=1;
    public function lang(): string
    {
        return match($this){
            self::MALE=>trans('enums.male'),
            self::FEMALE=>trans('enums.female'),
        };
    }
}
?>