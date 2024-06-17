<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
class ExcptionFees extends Model
{
    use HasFactory,SoftDeletes,LogsActivity;
    protected $guarded=[];
    protected static $logOnlyDirty = true;
    public function students()
    {
        return $this->belongsTo('App\Models\Student','student_id');
    }
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['*'])->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
}