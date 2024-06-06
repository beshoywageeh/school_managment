<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class promotion extends Model
{
    use HasFactory, LogsActivity;
    protected $guarded = [];
    public function f_grade()
    {
        return $this->belongsTo(Grade::class, 'from_grade', 'id');
    }
    public function t_grade()
    {
        return $this->belongsTo(Grade::class, 'to_grade', 'id');
    }
    public function f_class()
    {
        return $this->belongsTo(class_room::class, 'from_class', 'id');
    }
    public function t_class()
    {
        return $this->belongsTo(class_room::class, 'to_class', 'id');
    }
    public function students()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }


    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['*'])->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
}
