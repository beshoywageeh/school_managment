<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Factories\HasFactory, SoftDeletes, Model};

class promotion extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "student_id",
        "from_grade",
        "to_grade",
        "from_class",
        "to_class",
        "to_acc",
        "from_acc",
        "user_id",
        "school_id",
    ];

    public function f_grade()
    {
        return $this->belongsTo(Grade::class, "from_grade", "id");
    }

    public function t_grade()
    {
        return $this->belongsTo(Grade::class, "to_grade", "id");
    }

    public function f_class()
    {
        return $this->belongsTo(class_room::class, "from_class", "id");
    }

    public function t_class()
    {
        return $this->belongsTo(class_room::class, "to_class", "id");
    }

    public function t_acc()
    {
        return $this->belongsTo(acadmice_year::class, "to_acc", "id");
    }

    public function f_acc()
    {
        return $this->belongsTo(acadmice_year::class, "from_acc", "id");
    }

    public function students()
    {
        return $this->belongsTo(Student::class, "student_id", "id");
    }
}
