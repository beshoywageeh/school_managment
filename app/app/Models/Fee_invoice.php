<?php

namespace App\Models;

use App\Enums\Payment_Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fee_invoice extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "fee_invoices";

    protected $fillable = [
        "invoice_date",
        "student_id",
        "grade_id",
        "classroom_id",
        "academic_year_id",
        "school_fee_id",
        "school_id",
        "user_id",
        "status",
    ];

    protected $casts = [
        "status" => Payment_Status::class,
    ];

    public function students()
    {
        return $this->belongsTo(Student::class, "student_id");
    }

    public function grades()
    {
        return $this->belongsTo(Grade::class, "grade_id");
    }

    public function classes()
    {
        return $this->belongsTo(class_room::class, "classroom_id");
    }

    public function fees()
    {
        return $this->belongsTo(School_Fee::class, "school_fee_id");
    }

    public function acd_year()
    {
        return $this->belongsTo(acadmice_year::class, "academic_year_id");
    }
}
