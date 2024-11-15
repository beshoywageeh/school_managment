<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class book_sheet extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['grade_id','classroom_id','name','opening_qty','sales_price','is_book'];
    public function grade()
    {
        return $this->belongsTo(grade::class);
    }    public function classroom()
    {
        return $this->belongsTo(class_room::class);
    }

}