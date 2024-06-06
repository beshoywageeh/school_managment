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

        return $this->belongsTo(acadmice_year::class, 'acadmiceyear_id');
    }
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['*'])->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
}
