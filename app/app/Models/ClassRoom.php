<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassRoom extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'grade_id',
        'user_id',
        'tameen',
        'school_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo("App\Models\User");
    }

    public function grade(): BelongsTo
    {
        return $this->belongsTo("App\Models\Grade", 'grade_id');
    }

    public function students(): HasMany
    {
        return $this->hasMany("App\Models\Student", 'classroom_id');
    }
}
