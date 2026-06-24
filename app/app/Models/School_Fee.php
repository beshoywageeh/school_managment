<?php

namespace App\Models;

use App\Http\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School_Fee extends Model
{
    use HasFactory, LogsActivity, SoftDeletes;

    protected $fillable = [
        'grade_id',
        'classroom_id',
        'user_id',
        'academic_year_id',
        'description',
        'amount',
        'school_id',
    ];

    protected $casts = ['amount' => 'decimal:2'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function classroom()
    {
        return $this->belongsTo(class_room::class);
    }

    public function year()
    {
        return $this->belongsTo(
            acadmice_year::class,
            'academic_year_id',
            'id',
        );
    }
}
