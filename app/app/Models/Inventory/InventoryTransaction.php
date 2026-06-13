<?php

namespace App\Models\Inventory;

use App\Enums\TransactionType;
use App\Models\settings;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InventoryTransaction extends Model
{
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
        'school_id',
        'user_id',
    ];

    protected $casts = [
        'type' => TransactionType::class,
        'quantity' => 'decimal:2',
        'balance' => 'decimal:2',
    ];

    public function item()
    {
        return $this->belongsTo(InventoryItem::class, 'item_id');
    }

    public function school()
    {
        return $this->belongsTo(settings::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeBySchool($query, $schoolId)
    {
        return $query->where('school_id', $schoolId);
    }
}
