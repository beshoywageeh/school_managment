<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class laboratory extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = ['location', 'location_id', 'sub_location', 'is_main', 'school_id', 'user_id'];

    public function sub_locations()
    {
        return $this->hasMany(laboratory::class, 'location_id');
    }

    public function orders()
    {
        return $this->hasMany(order::class, 'laboratory_id');
    }

    public function main_location()
    {
        return $this->belongsTo(laboratory::class, 'location_id', 'id');
    }
}
