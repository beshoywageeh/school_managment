<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fee_invoice extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'fee_invoices';

    protected $guarded = [];

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

        return $this->belongsTo(class_room::class, 'classroom_id');
    }

    public function fees()
    {

        return $this->belongsTo(school_fee::class, 'school_fee_id');
    }

    public function acd_year()
    {

        return $this->belongsTo(acadmice_year::class, 'academic_year_id');
    }
}
