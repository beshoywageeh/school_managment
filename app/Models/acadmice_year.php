<?php

namespace App\Models;

use App\Enums\Status;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class acadmice_year extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = ['status' => Status::class];
    protected $fillable = ['year_start', 'status', 'year_end', 'created_by', 'updated_by'];
    protected static $logAttributes = ['year_end', 'status'];
    protected static $logOnlyDirty = true;

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updator()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function academic_year_formated()
    {
        if ($this->year) {
            $year_start = Carbon::parse($this->year->year_start)->format('Y');
            $year_end = Carbon::parse($this->year->year_end)->format('Y');
            return $year_start . '-' . $year_end;
        }
        return "-";
    }
}
