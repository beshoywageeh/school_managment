<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class promotion extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'student_id',
        'from_grade',
        'to_grade',
        'from_class',
        'to_class',
        'to_acc',
        'from_acc',
        'user_id',
        'school_id',
    ];

    public function f_grade(): BelongsTo
    {
        return $this->belongsTo(Grade::class, 'from_grade', 'id');
    }

    public function t_grade(): BelongsTo
    {
        return $this->belongsTo(Grade::class, 'to_grade', 'id');
    }

    public function f_class(): BelongsTo
    {
        return $this->belongsTo(class_room::class, 'from_class', 'id');
    }

    public function t_class(): BelongsTo
    {
        return $this->belongsTo(class_room::class, 'to_class', 'id');
    }

    public function t_acc(): BelongsTo
    {
        return $this->belongsTo(AcademicYear::class, 'to_acc', 'id');
    }

    public function f_acc(): BelongsTo
    {
        return $this->belongsTo(AcademicYear::class, 'from_acc', 'id');
    }

    public function students(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
}
