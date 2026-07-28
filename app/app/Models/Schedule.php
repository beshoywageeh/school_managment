<?php

namespace App\Models;

use App\Models\Traits\BelongsToSchool;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use BelongsToSchool;
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'job_id',
        'class_id',
        'day',
        'period',
    ];

    protected $table = 'schedules';

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }

    public function section(): BelongsTo
    {
        return $this->belongsTo(ClassRoom2::class);
    }
}
