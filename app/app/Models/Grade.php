<?php

namespace App\Models;

use App\Models\Traits\BelongsToSchool;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grade extends Model
{
    use BelongsToSchool, HasFactory, SoftDeletes;

    protected $fillable = ['name', 'user_id'];

    // protected $primaryKey = 'id';
    public function user(): BelongsTo
    {
        return $this->belongsTo("App\Models\User");
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(
            "App\Models\User",
            'teacher_grade',
            'grade_id',
            'teacher_id',
        );
    }

    public function class_rooms(): HasMany
    {
        return $this->hasMany(ClassRoom::class, 'grade_id');
    }

    public function students(): HasMany
    {
        return $this->hasMany("App\Models\Student", 'grade_id');
    }

    public function classes(): HasMany
    {
        return $this->hasMany(classes::class, 'grade_id');
    }

    public function fees(): HasMany
    {
        return $this->hasMany("App\Models\SchoolFee", 'grade_id');
    }
}
