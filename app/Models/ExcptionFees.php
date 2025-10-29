<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExcptionFees extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function students()
    {
        return $this->belongsTo('App\Models\Student', 'student_id');
    }

    public function academic_year()
    {

        return $this->belongsTo('App\Models\Acadmice_year', 'academic_year_id');
    }

    public function grade()
    {

        return $this->belongsTo('App\Models\Grade', 'grade_id');
    }

    public function classroom()
    {

        return $this->belongsTo('App\Models\class_room', 'class_id');
    }
}
