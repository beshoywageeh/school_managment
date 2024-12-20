<?php

namespace App\Models;

use App\Enums\Payment_Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentParts extends Model
{
    use HasFactory, SoftDeletes;

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

        return $this->belongsTo(Class_room::class, 'class_id');
    }

    public function year()
    {

        return $this->belongsTo(acadmice_year::class, 'acadmic_id');
    }

    public function getStatusAttribute()
    {
        return $this->payment_status->value == 0 ? trans('report.unpaid') : trans('report.paid');
    }
}
