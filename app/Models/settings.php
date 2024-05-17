<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
class settings extends Model
{
    use HasFactory,SoftDeletes,LogsActivity;



    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
	  public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['*'])->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
}
