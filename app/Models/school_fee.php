<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Carbon\Carbon;

class School_Fee extends Model
{
    use HasFactory, LogsActivity, SoftDeletes;
    protected $fillable = ['grade_id', 'classroom_id', 'user_id', 'academic_year_id', 'description', 'amount'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function grade()
    {
        return $this->belongsTo('App\Models\Grade', 'grade_id', 'id');
    }

    public function classroom()
    {
        return $this->belongsTo('App\Models\class_room');
    }
    public function year()
    {
        return $this->belongsTo('App\Models\acadmice_year', 'academic_year_id', 'id');
    }
    public function academic_year_formated()
    {
        if ($this->year) {
            $year_start = Carbon::parse($this->year->year_start)->format('Y');
            $year_end = Carbon::parse($this->year->year_end)->format('Y');
            return $year_start . '-' . $year_end;
        }
        return "-";
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['*'])->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
}