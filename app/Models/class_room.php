<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
class class_room extends Model
{
    use HasFactory,SoftDeletes,LogsActivity;

    protected $fillable = [
        'name',
        'grade_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function grade()
    {
        return $this->belongsTo('App\Models\Grade', 'grade_id');
    }

    public function students()
    {
        return $this->hasMany('App\Models\Student', 'classroom_id');
    }
	   public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['*'])->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
}
