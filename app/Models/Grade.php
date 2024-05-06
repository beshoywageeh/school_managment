<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'Grade_Name',
        'user_id',
    ];

    //protected $primaryKey = 'id';
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function class_room()
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
