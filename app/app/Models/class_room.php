<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class class_room extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'grade_id',
        'user_id',
        'tameen',
        'school_id',
    ];

    public function user()
    {
        return $this->belongsTo("App\Models\User");
    }

    public function grade()
    {
        return $this->belongsTo("App\Models\Grade", 'grade_id');
    }

    public function students()
    {
        return $this->hasMany("App\Models\Student", 'classroom_id');
    }

    public function tammen()
    {
        $value = $this->tameen;

        if ($value == 0) {
            return '<span class="inline-flex items-center px-3 py-1.5 rounded-lg text-sm font-medium bg-red-100 text-red-800">'.
                trans('general.no_tammen').
                '</span>';
        }

        return '<span class="inline-flex items-center px-3 py-1.5 rounded-lg text-sm font-medium bg-green-100 text-green-800">'.
            trans('general.ok_tammen').
            '</span>';
    }
}
