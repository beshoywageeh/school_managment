<?php

namespace App\Models;

use App\Enums\Payment_Type;
use Illuminate\Database\Eloquent\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentAccount extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'student_accounts';

    protected $fillable = [
        'student_id',
        'grade_id',
        'classroom_id',
        'receipt_payment_id',
        'fee_invoices_id',
        'exception_id',
        'academic_year_id',
        'date',
        'type',
        'debit',
        'credit',
    ];

    protected $casts = [
        'type' => Payment_Type::class,
        'date' => 'date',
        'debit' => 'decimal:2',
        'credit' => 'decimal:2',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function classroom(): BelongsTo
    {
        return $this->belongsTo(class_room::class);
    }

    public function grade(): BelongsTo
    {
        return $this->belongsTo(Grade::class);
    }

    public function academic_year(): BelongsTo
    {
        return $this->belongsTo(AcademicYear::class);
    }

    public function fee(): BelongsTo
    {
        return $this->belongsTo(FeeInvoice::class, 'fee_invoices_id', 'id');
    }

    public function recipt_payment(): BelongsTo
    {
        return $this->belongsTo(ReceiptPayment::class);
    }

    public function excpetion(): BelongsTo
    {
        return $this->belongsTo(ExceptionFees::class);
    }
}
