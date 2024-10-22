<?php

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class acadmice_year extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = ['status' => Status::class];

    protected $fillable = ['year_start', 'status', 'year_end', 'created_by', 'updated_by', 'view'];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updator()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
