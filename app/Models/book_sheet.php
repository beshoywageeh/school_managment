<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class book_sheet extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['grade_id', 'classroom_id', 'name', 'opening_qty', 'sales_price', 'is_book', 'school_id', 'user_id'];

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function classroom()
    {
        return $this->belongsTo(class_room::class);
    }

    public function orders()
    {
        return $this->belongsToMany(bookSheets_order::class, 'books_sheets_stocks', 'books_sheets_id', 'order_id')->withPivot('quantity_in', 'quantity_out');
    }
}
