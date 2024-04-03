<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'gender',
        'birth_date',
        'parent_id',
        'user_id',
        'grade_id',
        'class_room_id',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
        public function grade()
    {
        return $this->belongsTo('App\Models\Grade');
    }
    public function classroom()
    {
        return $this->belongsTo('App\Models\class_room');
    }
    public function parent()
    {
        return $this->belongsTo('App\Models\My_parents');
    }
    public function scopeSearch($query,$Search){

        return $query->where('name', 'LIKE', '%' . $Search . '%');
    }
}