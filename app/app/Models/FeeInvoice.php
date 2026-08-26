<?php

namespace App\Models;

use App\Enums\Payment_Status;
use App\Models\Traits\BelongsToSchool;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class FeeInvoice extends Model
{
    use BelongsToSchool, HasFactory, SoftDeletes;

    protected $table = 'fee_invoices';

    protected $fillable = [
        'invoice_date',
        'student_id',
        'grade_id',
        'classroom_id',
        'academic_year_id',
        'school_fee_id',
        'user_id',
        'status',
    ];

    protected $casts = [
        'status' => Payment_Status::class,
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function grade(): BelongsTo
    {
        return $this->belongsTo(Grade::class, 'grade_id');
    }

    public function classroom(): BelongsTo
    {
        return $this->belongsTo(ClassRoom::class, 'classroom_id');
    }

    public function schoolFee(): BelongsTo
    {
        return $this->belongsTo(SchoolFee::class, 'school_fee_id', 'id');
    }

    public function acd_year(): BelongsTo
    {
        return $this->belongsTo(AcademicYear::class, 'academic_year_id');
    }
}
