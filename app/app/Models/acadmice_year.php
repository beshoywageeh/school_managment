<?php

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class acadmice_year extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'acadmice_years';

    protected $fillable = [
        'year_start',
        'status',
        'year_end',
        'created_by',
        'updated_by',
        'view',
        'school_id',
    ];

    protected $casts = [
        'status' => Status::class,
        'year_start' => 'date',
        'year_end' => 'date',
    ];

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
