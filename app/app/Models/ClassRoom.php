<?php

namespace App\Models;

use App\Models\Traits\BelongsToSchool;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassRoom extends Model
{
    use BelongsToSchool, HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'grade_id',
        'user_id',
        'tameen',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function grade(): BelongsTo
    {
        return $this->belongsTo(Grade::class, 'grade_id');
    }

    public function students(): HasMany
    {
        return $this->hasMany(Student::class, 'classroom_id');
    }
}
