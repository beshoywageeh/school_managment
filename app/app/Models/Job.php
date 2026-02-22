<?php

namespace App\Models;

use App\Enums\Jobs_types;
use App\Enums\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = ['status' => Status::class, 'type' => Jobs_types::class];

    protected $table = 'work_jobs';

    protected $fillable = ['type', 'name', 'created_by', 'updated_by', 'school_id'];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updator()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function jobs()
    {
        return $this->belongsTo(Job::class, 'main_job_id');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'job_id');
    }
}
