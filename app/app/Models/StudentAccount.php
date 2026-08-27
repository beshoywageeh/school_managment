<?php

namespace App\Models;

use App\Enums\Payment_Type;
use App\Models\Traits\BelongsToSchool;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentAccount extends Model
{
    use BelongsToSchool;
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
        'school_id',
        'exchange_bond_id',
    ];

    protected $casts = [
        'type' => Payment_Type::class,
        'date' => 'date',
        'debit' => 'decimal:2',
        'credit' => 'decimal:2',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function classroom()
    {
        return $this->belongsTo(ClassRoom::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function academic_year()
    {
        return $this->belongsTo(AcademicYear::class);
    }

    public function fee()
    {
        return $this->belongsTo(FeeInvoice::class, 'fee_invoices_id', 'id');
    }

    public function receiptPayment()
    {
        return $this->belongsTo(ReceiptPayment::class);
    }

    public function exception()
    {
        return $this->belongsTo(ExceptionFees::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
