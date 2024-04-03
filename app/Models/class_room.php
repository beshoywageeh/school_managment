<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class class_room extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_name',
        'grade_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function grade()
    {
        return $this->belongsTo('App\Models\Grade', 'grade_id');
    }
    public function students()
    {
        return $this->hasMany('App\Models\Student', 'classroom_id');
    }
}