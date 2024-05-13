<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Enums\{UserGender,UserReligion};
class Student extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'gender',
        'birth_date',
        'parent_id',
        'user_id',
        'grade_id',
        'classroom_id',
        'address','join_date',
        'national_id'
    ];
    protected $casts = [
        'gender'=>UserGender::class,
        'religion'=>UserReligion::class

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

    public function scopeSearch($query, $Search)
    {

        return $query->where('name', 'LIKE', '%'.$Search.'%');
    }
}