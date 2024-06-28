<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Recipt_Payment extends Model
{
    use HasFactory, SoftDeletes, LogsActivity;

    protected $guarded=[];
    protected $table='recipt__payments';
    public function student(){
        return $this->belongsTo(Student::class,'student_id');
    }
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['manual'])->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
    public function getDescriptionForEvent(string $eventName): string
    {
        $changes = $this->getChanges();
        $oldStatus = $this->getOriginal('manual');
        $newStatus = $changes['manual'] ?? null;

        if ($eventName == 'created') {
            return trans('system_lookup.field_create', ['value' => $this->manual]);
        } elseif ($eventName == 'updated') {
            return trans('system_lookup.field_change', [
                'value' => $this->id,
                'old_value' => $oldStatus,
                'new_value' => $newStatus
            ]);
        } else {
            return trans('system_lookup.field_delete', ['value' => $this->manual]);
        }
    }
}
