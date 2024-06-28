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
    protected static $logAttributes = ['name'];
    protected static $logOnlyDirty = true;
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
            ->logOnly(['name'])->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
    public function getDescriptionForEvent(string $eventName): string
    {
        $changes = $this->getChanges();
        $oldname = $this->getOriginal('name');
        $newname = $changes['status'] ?? null;

        if ($eventName == 'created') {
            return trans('system_lookup.field_create', ['value' => $this->name]);
        } elseif ($eventName == 'updated') {
            return trans('system_lookup.field_change', [
                'value' => $this->id,
                'old_value' => $oldname,
                'new_value' => $newname
            ]);
        } else {
            return trans('system_lookup.field_delete', ['value' => $this->name]);
        }
    }
}