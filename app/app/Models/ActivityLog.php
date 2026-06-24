<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;

    protected $table = 'activity_logs';

    protected $fillable = [
        'user_id',
        'action',
        'description',
        'ip',
        'user_agent',
        'school_id',
        'model_type',
        'model_id',
    ];

    protected $casts = [
        'created_at' => 'date',
        'updated_at' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subject()
    {
        return $this->morphTo('model_type', 'model_id');
    }

    public function scopeBySchool($query, $school_id)
    {
        return $query->where('school_id', $school_id);
    }
}
