<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
class ExcptionFees extends Model
{
    use HasFactory,SoftDeletes,LogsActivity;
    protected $guarded=[];
    protected static $logOnlyDirty = true;
    public function students()
    {
        return $this->belongsTo('App\Models\Student','student_id');
    }
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['student_id', 'amount'])->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
    public function getDescriptionForEvent(string $eventName): string
    {
        $student = $this->student_id->students->name;
        $changes = $this->getChanges();
        $oldname = $this->getOriginal('student_id');
        $newname = $changes['student_id'] ?? null;
        if ($eventName == 'created') {
            return trans('system_lookup.field_create', ['value' => $student . '-' . $this->amount]);
        } elseif ($eventName == 'updated') {
            return trans('system_lookup.field_change', [
                'value' => $this->id,
                'old_value' => $oldname->students->name . '-' . $this->amount,
                'new_value' => $newname->students->name . '-' . $this->amount
            ]);
        } else {
            return trans('system_lookup.field_delete', ['value' => $student . '-' . $this->amount]);
        }
    }
}