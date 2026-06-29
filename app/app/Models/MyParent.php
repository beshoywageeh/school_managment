<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class MyParent extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'parents';

    protected $fillable = [
        'father_name',
        'father_phone',
        'father_job',
        'father_national_id',
        'mother_name',
        'mother_phone',
        'mother_job',
        'mother_national_id',
        'religion',
        'address',
        'birth_date',
        'user_id',
        'father_learning',
        'father_birth_date',
        'mother_birth_date',
        'school_id',
        'slug',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo("App\Models\User");
    }

    public function students(): HasMany
    {
        return $this->hasMany("App\Models\Student", 'parent_id')->orderBy(
            'join_date',
            'ASC',
        );
    }
}
