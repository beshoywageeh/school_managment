<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Enums\{UserGender, user_religion,Student_Status};
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
class Student extends Model
{
    use HasFactory, SoftDeletes, LogsActivity;

    protected $fillable = [
        'name',
        'gender',
        'birth_date',
        'parent_id',
        'user_id',
        'grade_id',
        'classroom_id',
        'address','join_date',
        'national_id','birth_at_begin','student_status','religion'
    ];
    protected $casts = [
        'gender'=>UserGender::class,
        'religion' => user_religion::class,
        'student_status'=>Student_Status::class

    ];


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

    public function parent()
    {
        return $this->belongsTo('App\Models\My_parents');
    }
    public function fees(){
        return $this->hasMany('App\Models\StudentAccount');
    }
    public function StudentAccount()
    {
        return $this->hasMany('App\Models\StudentAccount');
    }
    public function scopeSearch($query, $Search)
    {

        return $query->where('name', 'LIKE', '%'.$Search.'%');
    }
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['name'])->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
    public function getDescriptionForEvent(string $eventName): string
    {
        $changes = $this->getChanges();
        $old_name = $this->getOriginal('name');
        $new_name = $changes['name'] ?? null;

        if ($eventName == 'created') {
            return trans('system_lookup.field_create', ['value' => $this->name]);
        } elseif ($eventName == 'updated') {
            return trans('system_lookup.field_change', [
                'value' => $this->id,
                'old_value' => $old_name,
                'new_value' => $new_name,
            ]);
        } else {
            return trans('system_lookup.field_delete', ['value' => $this->name]);
        }
    }
}