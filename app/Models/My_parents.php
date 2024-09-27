<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class My_parents extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'parents';

    protected $fillable = ['Father_Name', 'Father_Phone', 'Father_Job', 'Father_National_Id', 'Mother_Name', 'Mother_Phone', 'Mother_Job', 'Mother_National_Id', 'Religion', 'Address', 'BirthDate', 'user_id', 'Father_Learning', 'Father_Birth_Date', 'Mother_Birth_Date'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function Students()
    {
        return $this->hasMany('App\Models\Student', 'parent_id')->orderBy('join_date','ASC');
    }
}
