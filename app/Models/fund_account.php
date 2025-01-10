<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class fund_account extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['date', 'receipt_id', 'Debit', 'Credit', 'school_id', 'user_id'];

    public function receipts()
    {
        return $this->belongsTo(Recipt_Payment::class, 'receipt_id');
    }

    public function exchange_bond()
    {
        return $this->belongsTo(exchange_bond::class, 'exchange_bond_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
