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
    const HEADINGS = [
        'id'=>'#',
        'name' => 'إسم الطالب',
        'birth_date' => 'تاريخ الميلاد',
        'gender' => 'النوع',
        'grade_id' => 'المرحلة الدراسية',
        'address' => 'العنوان',
        'national_id' => 'الرقم القومي',
        'join_date' => 'تاريخ الالتحاق',
        'parent_id' => 'ولي امر الطالب',
        'classroom_id'=>'الفصل الدراسي',
        'student_status'=>'-',
        'birth_at_begin'=>'-',
        'user_id'=>'-',
        'slug'=>'-',
        'created_at'=>'-',
        'updated_at'=>'-',
        'deleted_at'=>'-'

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
            ->logOnly(['*'])->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
}