<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FundAccount extends Model
{
    use HasFactory;

    protected $table = 'fund_accounts';

    protected $fillable = [
        'date',
        'receipt_id',
        'Debit',
        'Credit',
        'school_id',
        'user_id',
    ];

    protected $casts = [
        'date' => 'date',
        'Debit' => 'decimal:2',
        'Credit' => 'decimal:2',
    ];

    public function receipts(): BelongsTo
    {
        return $this->belongsTo(Recipt_Payment::class, 'receipt_id');
    }

    public function exchange_bond(): BelongsTo
    {
        return $this->belongsTo(Exchange_bond::class, 'exchange_bond_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
