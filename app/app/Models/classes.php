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
        'tameen',
        'school_id',
        'user_id',
    ];

    protected $casts = [
        'tameen' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function grade()
    {
        return $this->belongsTo(Grade::class, 'grade_id');
    }

    public function class_room()
    {
        return $this->belongsTo(class_room::class, 'class_room_id');
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'class_id');
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
