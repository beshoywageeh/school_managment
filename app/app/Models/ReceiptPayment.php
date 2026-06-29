<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReceiptPayment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'manual',
        'date',
        'academic_year_id',
        'student_id',
        'user_id',
        'school_id',
        'Debit',
    ];

    protected $casts = ['date' => 'date', 'Debit' => 'decimal:2'];

    protected $table = 'recipt__payments';

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function acc_year(): BelongsTo
    {
        return $this->belongsTo(AcademicYear::class, 'academic_year_id');
    }
}
