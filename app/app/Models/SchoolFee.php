<?php

namespace App\Models;

use App\Http\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class SchoolFee extends Model
{
    use HasFactory, LogsActivity, SoftDeletes;

    protected $table = 'school__fees';

    protected $fillable = [
        'grade_id',
        'classroom_id',
        'user_id',
        'academic_year_id',
        'description',
        'amount',
        'school_id',
    ];

    protected $casts = ['amount' => 'decimal:2'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function grade(): BelongsTo
    {
        return $this->belongsTo(Grade::class);
    }

    public function classroom(): BelongsTo
    {
        return $this->belongsTo(class_room::class);
    }

    public function year(): BelongsTo
    {
        return $this->belongsTo(
            AcademicYear::class,
            'academic_year_id',
            'id',
        );
    }

    public function fee_invoices(): HasMany
    {
        return $this->hasMany(FeeInvoice::class, 'fee_invoice_id');
    }

    public function students(): HasMany
    {
        return $this->hasMany(Student::class, 'school_fee_id');
    }
}
