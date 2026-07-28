<?php

namespace App\Models\Inventory;

use App\Enums\TransactionType;
use App\Models\School;
use App\Models\Traits\BelongsToSchool;
use App\Models\User;
use Illuminate\Database\Eloquent\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class InventoryTransaction extends Model
{
    use BelongsToSchool;
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'item_id',
        'type',
        'quantity',
        'balance',
        'reference_type',
        'reference_id',
        'notes',
        'user_id',
    ];

    protected $casts = [
        'type' => TransactionType::class,
        'quantity' => 'decimal:2',
        'balance' => 'decimal:2',
    ];

    public function item(): BelongsTo
    {
        return $this->belongsTo(InventoryItem::class, 'item_id');
    }

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeBySchool($query, $schoolId)
    {
        return $query->where('school_id', $schoolId);
    }

    public function reference(): MorphTo
    {
        return $this->morphTo();
    }
}
