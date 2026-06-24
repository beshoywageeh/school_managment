<?php

namespace App\Models;

use App\Enums\Payment_Type;
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
        'recipt__payment_id',
        'fee_invoices_id',
        'excpetion_id',
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

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function classroom()
    {
        return $this->belongsTo(class_room::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function academic_year()
    {
        return $this->belongsTo(Acadmice_year::class);
    }

    public function fee()
    {
        return $this->belongsTo(
            Fee_invoice::class,
            'fee_invoices_id',
            'id',
        );
    }

    public function recipt_payment()
    {
        return $this->belongsTo(Recipt_Payment::class);
    }

    public function excpetion()
    {
        return $this->belongsTo(ExcptionFees::class, 'excpetion_id', 'id');
    }
}
