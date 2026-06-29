<?php

namespace App\Models;

use App\Enums\Student_Status;
use App\Enums\user_religion;
use App\Enums\UserGender;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'gender',
        'birth_date',
        'parent_id',
        'user_id',
        'grade_id',
        'classroom_id',
        'address',
        'join_date',
        'national_id',
        'birth_at_begin',
        'student_status',
        'religion',
        'code',
        'acadmiecyear_id',
        'nationality_id',
        'school_id',
    ];

    protected $casts = [
        'gender' => UserGender::class,
        'religion' => user_religion::class,
        'student_status' => Student_Status::class,
    ];

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

    public function parent(): BelongsTo
    {
        return $this->belongsTo(MyParent::class);
    }

    public function StudentAccount(): HasMany
    {
        return $this->hasMany(StudentAccount::class, 'student_id', 'id');
    }

    public function Acadmice_year(): BelongsTo
    {
        return $this->belongsTo(acadmice_year::class);
    }

    public function nationality(): BelongsTo
    {
        return $this->belongsTo(nationality::class);
    }

    public function fee_invoice(): HasMany
    {
        return $this->hasMany(Fee_invoice::class);
    }

    public function parts(): HasMany
    {
        return $this->hasMany(PaymentParts::class);
    }

    public function excption(): HasMany
    {
        return $this->hasMany(ExceptionFees::class);
    }
}
