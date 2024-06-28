<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Enums\Payment_Status;
class PaymentParts extends Model
{
    use HasFactory, SoftDeletes, LogsActivity;

    protected $guarded = [];
    protected $casts = ['payment_status' => Payment_Status::class];

    public function students()
    {
        return $this->belongsTo('App\Models\Student', 'student_id');
    }

    public function grades()
    {

        return $this->belongsTo(Grade::class, 'grade_id');
    }

    public function classes()
    {

        return $this->belongsTo(Class_room::class, 'classroom_id');
    }

    public function year()
    {

        return $this->belongsTo(acadmice_year::class, 'acadmic_id');
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['*'])->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
    public function getDescriptionForEvent(string $eventName): string
    {
        $changes = $this->getChanges();
        $oldStatus = $this->getOriginal('status');
        $newStatus = $changes['status'] ?? null;

        // تأكد من تحويل القيم إلى نص
        $oldStatus = $oldStatus instanceof payment_status ? $oldStatus->lang() : $oldStatus;
        $newStatus = $newStatus instanceof payment_status ? $newStatus->lang() : $newStatus;



        if ($eventName == 'created') {
            return trans('system_lookup.field_create', ['value' => $this->students->name . '-' . $this->amount]);
        } elseif ($eventName == 'updated') {
            return trans('system_lookup.field_change', [
                'value' => $this->id,
                'old_value' => $oldStatus,
                'new_value' => $newStatus
            ]);
        } else {
            return trans('system_lookup.field_delete', ['value' => $this->id]);
        }
    }
}