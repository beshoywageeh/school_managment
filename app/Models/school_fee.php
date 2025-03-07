<?php

namespace App\Models;

use App\Http\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School_Fee extends Model
{
    use HasFactory, LogsActivity, SoftDeletes;

    protected $fillable = ['grade_id', 'classroom_id', 'user_id', 'academic_year_id', 'description', 'amount', 'school_id'];

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
}
