<?php

namespace App\Models;

use App\Enums\Payment_Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class StudentAccount extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=[];
    protected $table='student_accounts';
    protected $casts = [
        'type' => Payment_Type::class

    ];


}
