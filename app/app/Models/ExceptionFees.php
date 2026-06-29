<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExceptionFees extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'excption_fees';

    protected $fillable = [
        'student_id',
        'grade_id',
        'class_id',
        'fee_id',
        'academic_year_id',
        'user_id',
        'school_id',
        'date',
        'amount',
    ];

    protected $casts = [
        'date' => 'date',
        'amount' => 'decimal:2',
    ];

    public function students(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function academic_year(): BelongsTo
    {
        return $this->belongsTo(Acadmice_year::class, 'academic_year_id');
    }

    public function grade(): BelongsTo
    {
        return $this->belongsTo("App\Models\Grade", 'grade_id');
    }

    public function classroom(): BelongsTo
    {
        return $this->belongsTo("App\Models\class_room", 'class_id');
    }

    public function school_fee(): BelongsTo
    {
        return $this->belongsTo(
            "App\Models\SchoolFee",
            'school_fee_id',
        )->withTrashed();
    }
}
