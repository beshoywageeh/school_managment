<?php

namespace App\Models;

use App\Models\Traits\BelongsToSchool;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FundAccount extends Model
{
    use BelongsToSchool, HasFactory;

    protected $table = 'fund_accounts';

    protected $fillable = [
        'date',
        'receipt_id',
        'Debit',
        'Credit',
        'user_id',
        'exchange_bond_id',
        'school_id',
    ];

    protected $casts = [
        'date' => 'date',
        'Debit' => 'decimal:2',
        'Credit' => 'decimal:2',
    ];

    public function receipts(): BelongsTo
    {
        return $this->belongsTo(ReceiptPayment::class, 'receipt_id');
    }

    public function exchangeBond(): BelongsTo
    {
        return $this->belongsTo(ExchangeBond::class, 'exchange_bond_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
