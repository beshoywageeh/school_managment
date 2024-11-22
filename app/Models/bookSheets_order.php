<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class bookSheets_order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['auto_number', 'manual_number', 'manual_date', 'date', 'type', 'student_id'];

    public function stocks()
    {

        return $this->belongsToMany(book_sheet::class, 'books_sheets_stocks', 'order_id', 'books_sheets_id')->withPivot('quantity_in', 'quantity_out');
    }
}
