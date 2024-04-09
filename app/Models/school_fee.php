<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class school_fee extends Model
{
    use HasFactory;
    protected $fillable = ['grade_id', 'classroom_id', 'user_id', 'description', 'amount'];

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
}
