<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class classes extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'classes';

    protected $fillable = [
        'title',
        'grade_id',
        'class_room_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'tameen',
        'school_id',
        'user_id',
    ];

    public function grade()
    {
        return $this->belongsTo(grade::class);
    }

    public function class_room()
    {
        return $this->belongsTo(class_room::class, 'class_room_id');
    }

    public function students()
    {
        return $this->hasMany('App\Models\Student', 'class_id');
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
