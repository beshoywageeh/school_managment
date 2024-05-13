<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Enums\Status;

class Job extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $casts = ['status' => Status::class];
    protected $fillable = ['status', 'title', 'created_by', 'updated_by'];
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function updator()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
