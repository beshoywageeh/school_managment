<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class schedules extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['user_id', 'job_id', 'class_id', 'day', 'period'];

    protected $table = 'schedules';

    public function teacher()
    {
        return $this->belongsTo('App\Models\users', 'user_id', 'id');
    }

    public function job()
    {
        return $this->belongsTo('App\Models\jobs', 'job_id', 'id');
    }

    public function class()
    {
        return $this->belongsTo('App\Models\classes', 'class_id', 'id');
    }
}
