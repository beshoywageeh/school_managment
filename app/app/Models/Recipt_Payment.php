<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipt_Payment extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $table = 'recipt__payments';

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function acc_year()
    {
        return $this->belongsTo(Acadmice_year::class, 'academic_year_id');
    }
}
