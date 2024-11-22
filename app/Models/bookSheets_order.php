<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class bookSheets_order extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function stocks()
    {

        return $this->belongsToMany(book_sheet::class, 'books_sheets_stocks', 'order_id', 'book_sheet_id')->withPivot('quantity_in', 'quantity_out');
    }
}
