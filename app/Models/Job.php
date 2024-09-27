<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Enums\{Status, Jobs_types};

class Job extends Model
{
    use HasFactory, SoftDeletes;
    protected $casts = ['status' => Status::class];
    protected $table='work_jobs';
    protected $fillable = ['status', 'name', 'created_by', 'updated_by', 'main_job_id','is_main'];
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function updator()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
    public function jobs(){
        return $this->belongsTo(Job::class,'main_job_id');
    }

}
