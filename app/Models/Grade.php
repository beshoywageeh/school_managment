<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grade extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'user_id',
    ];

    //protected $primaryKey = 'id';
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'teacher_grade', 'grade_id', 'teacher_id');
    }

    public function class_rooms()
    {
        return $this->hasMany(class_room::class, 'grade_id');
    }

    public function students()
    {
        return $this->hasMany('App\Models\Student', 'grade_id');
    }

    public function fees()
    {
        return $this->hasMany('App\Models\school_fee', 'grade_id');
    }
}
