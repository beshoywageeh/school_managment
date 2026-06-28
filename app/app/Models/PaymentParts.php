<?php

namespace App\Models;

use App\Enums\Payment_Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentParts extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "student_id",
        "grade_id",
        "class_id",
        "academic_year_id",
        "school_id",
        "date",
        "amount",
        "status",
        "school_fees_id",
    ];

    protected $casts = [
        "status" => Payment_Status::class,
        "date" => "date",
        "amount" => "decimal:2",
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
        return $this->belongsTo(class_room::class, "class_id");
    }

    public function year(): BelongsTo
    {
        return $this->belongsTo(acadmice_year::class, "academic_year_id");
    }
}
