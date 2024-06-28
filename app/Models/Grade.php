<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
class Grade extends Model
{
    use HasFactory,SoftDeletes,LogsActivity;

    protected $fillable = [
        'name',
        'user_id',
    ];

    //protected $primaryKey = 'id';
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'teacher_grade', 'grade_id', 'teacher_id');
    }

    public function class_room()
    {
        return $this->hasMany(class_room::class, 'grade_id');
    }

    public function students()
    {
        return $this->hasMany('App\Models\Student', 'grade_id');
    }

    public function fees()
    {
        return $this->hasMany('App\Models\school_fee', 'grade_id');
    }
	   public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['name'])->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
    public function getDescriptionForEvent(string $eventName): string
    {
        $changes = $this->getChanges();
        $oldname = $this->getOriginal('name');
        $newname = $changes['name'] ?? null;
        if ($eventName == 'created') {
            return trans('system_lookup.field_create', ['value' => $this->name]);
        } elseif ($eventName == 'updated') {
            return trans('system_lookup.field_change', [
                'value' => $this->id,
                'old_value' =>  $oldname,
                'new_value' => $newname
            ]);
        } else {
            return trans('system_lookup.field_delete', ['value' => $this->id . '-' . $this->name]);
        }
    }
}