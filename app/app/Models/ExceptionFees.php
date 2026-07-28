<?php

namespace App\Models;

use App\Models\Traits\BelongsToSchool;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExceptionFees extends Model
{
    use BelongsToSchool, HasFactory, SoftDeletes;

    protected $table = 'excption_fees';

    protected $fillable = [
        'student_id',
        'grade_id',
        'class_id',
        'fee_id',
        'academic_year_id',
        'user_id',
        'date',
        'amount',
    ];

    protected $casts = [
        'date' => 'date',
        'amount' => 'decimal:2',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function academic_year(): BelongsTo
    {
        return $this->belongsTo(AcademicYear::class, 'academic_year_id');
    }

    public function grade(): BelongsTo
    {
        return $this->belongsTo("App\Models\Grade", 'grade_id');
    }

    public function classroom(): BelongsTo
    {
        return $this->belongsTo(ClassRoom::class, 'class_id');
    }

    public function school_fee(): BelongsTo
    {
        return $this->belongsTo(
            "App\Models\SchoolFee",
            'fee_id',
        )->withTrashed();
    }
}
