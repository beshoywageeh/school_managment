<?php

namespace App\Http\Traits;

use Illuminate\Database\Eloquent\Model;
trait TitleTrait
{

    public function title()
    {
        $title = class_basename();
        return $title;
    }
  
}