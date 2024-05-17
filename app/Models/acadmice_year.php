<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Enums\Status;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
class acadmice_year extends Model
{
    use HasFactory, LogsActivity, SoftDeletes;
    protected $casts = ['status' => Status::class];
    protected $fillable = ['year_start', 'status', 'year_end', 'created_by', 'updated_by'];
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function updator()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['*'])->logOnlyDirty();
        // Chain fluent methods for configuration options
    }

}
