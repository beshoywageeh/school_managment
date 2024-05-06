<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class settings extends Model
{
    use HasFactory;
    //public $table='settings';

    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}