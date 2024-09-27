<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Enums\Payment_Status;
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

        return $this->belongsTo(Class_room::class, 'classroom_id');
    }

    public function year()
    {

        return $this->belongsTo(acadmice_year::class, 'acadmic_id');
    }
}
