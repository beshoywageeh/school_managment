<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class class_room extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'grade_id',
        'user_id',
        'tameen',
        'school_id',
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

    public function tammen()
    {
        $value = $this->tameen;
        if ($value == 0) {
            print_r('<span class="badge badge-danger">'.trans('General.no_tammen').'</span>');
        } else {
            print_r('<span class="badge badge-success">'.trans('General.ok_tammen').'</span>');
        }

    }
}
