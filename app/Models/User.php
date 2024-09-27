<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enums\{user_religion, UserGender, Jobs_types};

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;


use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'code',
        'phone',
        'address',
        'date_of_birth',
        'date_of_hiring',
        'learning',
        'reiligon',
        'gender',
        'type',
        'job_id',
        'isAdmin',
        'login_allow',
        'insurance',
        'insurance_date',
        'national_id',
        'grade_year'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'gender'=>UserGender::class,
        'religion' => user_religion::class,

    ];

    public function image()
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }
    public function settings(){
        return $this->belongsToMany('App\Models\settings','setting_user','id','setting_id');
    }
    public function job()
    {
        return $this->belongsTo('App\Models\Job');
    }
    public function grades()
    {
        return $this->belongsToMany('App\Models\Grade', 'teacher_grade', 'teacher_id', 'grade_id');
    }
}