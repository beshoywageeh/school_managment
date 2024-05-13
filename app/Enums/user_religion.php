<?php
namespace App\Enums;
enum user_religion : string
{
    case CHRISTIAN='0';
    case MUSLIM='1';
    public function lang():string
    {
        return match($this){
            self::CHRISTIAN=>trans('enums.christian'),
            self::MUSLIM=>trans('enums.muslim'),
        };
    }
}
