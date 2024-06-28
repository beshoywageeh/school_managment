<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\{students};

class Fee_invoice extends Model
{
    use HasFactory;
    use SoftDeletes, LogsActivity;
    protected $table='fee_invoices';
    protected $fillable=['status'];
    public function students()
    {

        return $this->belongsTo(Student::class, 'student_id');
    }
    public function grades()
    {

        return $this->belongsTo(Grade::class, 'grade_id');
    }
    public function classes()
    {

        return $this->belongsTo(Class_room::class, 'classroom_id');
    }
    public function fees()
    {

        return $this->belongsTo(School_Fee::class, 'school_fee_id');
    }public function acd_year()
    {

        return $this->belongsTo(acadmice_year::class,'academic_year_id');
    }
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['student_id', 'id'])->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
    public function getDescriptionForEvent(string $eventName): string
    {
        $student = $this->student_id->students->name;
        $changes = $this->getChanges();
        $oldname = $this->getOriginal('student_id');
        $newname = $changes['student_id'] ?? null;
        if ($eventName == 'created') {
            return trans('system_lookup.field_create', ['value' => $student . '-' . $this->id]);
        } elseif ($eventName == 'updated') {
            return trans('system_lookup.field_change', [
                'value' => $this->id,
                'old_value' => $oldname->students->name,
                'new_value' => $newname->students->name
            ]);
        } else {
            return trans('system_lookup.field_delete', ['value' => $student . '-' . $this->id]);
        }
    }
}