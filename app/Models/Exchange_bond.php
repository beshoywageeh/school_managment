<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exchange_bond extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['student_id', 'academic_year_id', 'date', 'amount', 'manual', 'description', 'school_id', 'user_id'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function acadmic_year()
    {
        return $this->belongsTo(acadmice_year::class, 'academic_year_id');
    }

    public function studentaccount()
    {
        return $this->hasMany(StudentAccount::class);
    }
}
