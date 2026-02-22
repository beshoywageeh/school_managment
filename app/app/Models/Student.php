<?php

namespace App\Models;

use App\Enums\Student_Status;
use App\Enums\user_religion;
use App\Enums\UserGender;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'gender',
        'birth_date',
        'parent_id',
        'user_id',
        'grade_id',
        'classroom_id',
        'address', 'join_date',
        'national_id',
        'birth_at_begin',
        'student_status',
        'religion',
        'code', 'acadmiecyear_id', 'nationality_id',
        'school_id',
    ];

    protected $casts = [
        'gender' => UserGender::class,
        'religion' => user_religion::class,
        'student_status' => Student_Status::class,
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function grade()
    {
        return $this->belongsTo('App\Models\Grade', 'grade_id', 'id');
    }

    public function classroom()
    {
        return $this->belongsTo('App\Models\class_room');
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\My_parents');
    }

    public function fees()
    {
        return $this->hasMany('App\Models\StudentAccount');
    }

    public function StudentAccount()
    {
        return $this->hasMany('App\Models\StudentAccount');
    }

    public function Acadmice_year()
    {
        return $this->hasMany('App\Models\acadmice_year');
    }

    public function nationality()
    {
        return $this->belongsTo('App\Models\nationality');
    }
}
