<?php

namespace App\Models;

use App\Enums\Jobs_types;
use App\Models\Traits\BelongsToSchool;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use BelongsToSchool, HasFactory, SoftDeletes;

    protected $table = 'work_jobs';

    protected $fillable = [
        'type',
        'name',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'type' => Jobs_types::class,
    ];

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function parentJob(): BelongsTo
    {
        return $this->belongsTo(Job::class, 'main_job_id');
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'job_id');
    }
}
