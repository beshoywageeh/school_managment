<?php

namespace App\Models;

use App\Enums\Status;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class acadmice_year extends Model
{
    use HasFactory, LogsActivity, SoftDeletes;

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

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['status', 'year_end'])->logOnlyDirty();
        // Chain fluent methods for configuration options
    }

    public function getDescriptionForEvent(string $eventName): string
    {
        $changes = $this->getChanges();
        $oldStatus = $this->getOriginal('status');
        $newStatus = $changes['status'] ?? null;
        $oldYear = $this->getOriginal('year_end');
        $newYear = $changes['year_end'] ?? null;
        // تأكد من تحويل القيم إلى نص
        $oldStatus = $oldStatus instanceof Status ? $oldStatus->lang() : $oldStatus;
        $newStatus = $newStatus instanceof Status ? $newStatus->lang() : $newStatus;

        if ($eventName == 'created') {
            return trans('system_lookup.field_create', ['value' => $this->id]);
        } elseif ($eventName == 'updated') {
            return trans('system_lookup.field_change', [
                'value' => $this->id,
                'old_value' => $oldStatus . '-' . $oldYear,
                'new_value' => $newStatus . '-' . $newYear
            ]);
        } else {
            return trans('system_lookup.field_delete', ['value' => $this->id]);
        }
    }
}
