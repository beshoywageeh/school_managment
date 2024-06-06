<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Recipt_Payment extends Model
{
    use HasFactory;
    use SoftDeletes;
    use LogsActivity;

    protected $guarded=[];
    protected $table='recipt__payments';
    public function student(){
        return $this->belongsTo(Student::class,'student_id');
    }
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['*'])->logOnlyDirty();
        // Chain fluent methods for configuration options
    }

}
